<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class GuardDutyClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\GuardDuty\GuardDutyClient>
     */
    public function getClass(): string
    {
        return \Aws\GuardDuty\GuardDutyClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptAdministratorInvitation',
            'acceptInvitation',
            'archiveFindings',
            'createDetector',
            'createFilter',
            'createIPSet',
            'createMalwareProtectionPlan',
            'createMembers',
            'createPublishingDestination',
            'createSampleFindings',
            'createThreatIntelSet',
            'declineInvitations',
            'deleteDetector',
            'deleteFilter',
            'deleteIPSet',
            'deleteInvitations',
            'deleteMalwareProtectionPlan',
            'deleteMembers',
            'deletePublishingDestination',
            'deleteThreatIntelSet',
            'describeMalwareScans',
            'describeOrganizationConfiguration',
            'describePublishingDestination',
            'disableOrganizationAdminAccount',
            'disassociateFromAdministratorAccount',
            'disassociateFromMasterAccount',
            'disassociateMembers',
            'enableOrganizationAdminAccount',
            'getAdministratorAccount',
            'getCoverageStatistics',
            'getDetector',
            'getFilter',
            'getFindings',
            'getFindingsStatistics',
            'getIPSet',
            'getInvitationsCount',
            'getMalwareProtectionPlan',
            'getMalwareScanSettings',
            'getMasterAccount',
            'getMemberDetectors',
            'getMembers',
            'getOrganizationStatistics',
            'getRemainingFreeTrialDays',
            'getThreatIntelSet',
            'getUsageStatistics',
            'inviteMembers',
            'listCoverage',
            'listDetectors',
            'listFilters',
            'listFindings',
            'listIPSets',
            'listInvitations',
            'listMalwareProtectionPlans',
            'listMembers',
            'listOrganizationAdminAccounts',
            'listPublishingDestinations',
            'listTagsForResource',
            'listThreatIntelSets',
            'startMalwareScan',
            'startMonitoringMembers',
            'stopMonitoringMembers',
            'tagResource',
            'unarchiveFindings',
            'untagResource',
            'updateDetector',
            'updateFilter',
            'updateFindingsFeedback',
            'updateIPSet',
            'updateMalwareProtectionPlan',
            'updateMalwareScanSettings',
            'updateMemberDetectors',
            'updateOrganizationConfiguration',
            'updatePublishingDestination',
            'updateThreatIntelSet',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptAdministratorInvitation' => $this->acceptAdministratorInvitation(),
            'acceptInvitation' => $this->acceptInvitation(),
            'archiveFindings' => $this->archiveFindings(),
            'createDetector' => $this->createDetector(),
            'createFilter' => $this->createFilter(),
            'createIPSet' => $this->createIPSet(),
            'createMalwareProtectionPlan' => $this->createMalwareProtectionPlan(),
            'createMembers' => $this->createMembers(),
            'createPublishingDestination' => $this->createPublishingDestination(),
            'createSampleFindings' => $this->createSampleFindings(),
            'createThreatIntelSet' => $this->createThreatIntelSet(),
            'declineInvitations' => $this->declineInvitations(),
            'deleteDetector' => $this->deleteDetector(),
            'deleteFilter' => $this->deleteFilter(),
            'deleteIPSet' => $this->deleteIPSet(),
            'deleteInvitations' => $this->deleteInvitations(),
            'deleteMalwareProtectionPlan' => $this->deleteMalwareProtectionPlan(),
            'deleteMembers' => $this->deleteMembers(),
            'deletePublishingDestination' => $this->deletePublishingDestination(),
            'deleteThreatIntelSet' => $this->deleteThreatIntelSet(),
            'describeMalwareScans' => $this->describeMalwareScans(),
            'describeOrganizationConfiguration' => $this->describeOrganizationConfiguration(),
            'describePublishingDestination' => $this->describePublishingDestination(),
            'disableOrganizationAdminAccount' => $this->disableOrganizationAdminAccount(),
            'disassociateFromAdministratorAccount' => $this->disassociateFromAdministratorAccount(),
            'disassociateFromMasterAccount' => $this->disassociateFromMasterAccount(),
            'disassociateMembers' => $this->disassociateMembers(),
            'enableOrganizationAdminAccount' => $this->enableOrganizationAdminAccount(),
            'getAdministratorAccount' => $this->getAdministratorAccount(),
            'getCoverageStatistics' => $this->getCoverageStatistics(),
            'getDetector' => $this->getDetector(),
            'getFilter' => $this->getFilter(),
            'getFindings' => $this->getFindings(),
            'getFindingsStatistics' => $this->getFindingsStatistics(),
            'getIPSet' => $this->getIPSet(),
            'getInvitationsCount' => $this->getInvitationsCount(),
            'getMalwareProtectionPlan' => $this->getMalwareProtectionPlan(),
            'getMalwareScanSettings' => $this->getMalwareScanSettings(),
            'getMasterAccount' => $this->getMasterAccount(),
            'getMemberDetectors' => $this->getMemberDetectors(),
            'getMembers' => $this->getMembers(),
            'getOrganizationStatistics' => $this->getOrganizationStatistics(),
            'getRemainingFreeTrialDays' => $this->getRemainingFreeTrialDays(),
            'getThreatIntelSet' => $this->getThreatIntelSet(),
            'getUsageStatistics' => $this->getUsageStatistics(),
            'inviteMembers' => $this->inviteMembers(),
            'listCoverage' => $this->listCoverage(),
            'listDetectors' => $this->listDetectors(),
            'listFilters' => $this->listFilters(),
            'listFindings' => $this->listFindings(),
            'listIPSets' => $this->listIPSets(),
            'listInvitations' => $this->listInvitations(),
            'listMalwareProtectionPlans' => $this->listMalwareProtectionPlans(),
            'listMembers' => $this->listMembers(),
            'listOrganizationAdminAccounts' => $this->listOrganizationAdminAccounts(),
            'listPublishingDestinations' => $this->listPublishingDestinations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listThreatIntelSets' => $this->listThreatIntelSets(),
            'startMalwareScan' => $this->startMalwareScan(),
            'startMonitoringMembers' => $this->startMonitoringMembers(),
            'stopMonitoringMembers' => $this->stopMonitoringMembers(),
            'tagResource' => $this->tagResource(),
            'unarchiveFindings' => $this->unarchiveFindings(),
            'untagResource' => $this->untagResource(),
            'updateDetector' => $this->updateDetector(),
            'updateFilter' => $this->updateFilter(),
            'updateFindingsFeedback' => $this->updateFindingsFeedback(),
            'updateIPSet' => $this->updateIPSet(),
            'updateMalwareProtectionPlan' => $this->updateMalwareProtectionPlan(),
            'updateMalwareScanSettings' => $this->updateMalwareScanSettings(),
            'updateMemberDetectors' => $this->updateMemberDetectors(),
            'updateOrganizationConfiguration' => $this->updateOrganizationConfiguration(),
            'updatePublishingDestination' => $this->updatePublishingDestination(),
            'updateThreatIntelSet' => $this->updateThreatIntelSet(),
        };
    }
    private function acceptAdministratorInvitation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function acceptInvitation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function archiveFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DetectorId'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedDataSources'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MalwareProtection'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScanEc2InstanceWithFindings'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EbsVolumes'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createIPSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IpSetId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createMalwareProtectionPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MalwareProtectionPlanId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Result'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createPublishingDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DestinationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSampleFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createThreatIntelSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ThreatIntelSetId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function declineInvitations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Result'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function deleteDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteIPSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteInvitations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Result'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function deleteMalwareProtectionPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Result'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function deletePublishingDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteThreatIntelSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeMalwareScans(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Scans'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DetectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdminDetectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScanId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScanStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScanStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScanEndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('TriggerDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScanResultDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('FileCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachedVolumes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScanType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('GuardDutyFindingId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ScanResult'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CLEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('INFECTED'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeviceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeSizeInGB'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnapshotArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GUARDDUTY_INITIATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeOrganizationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoEnable'),
                new \PHPStan\Type\Constant\ConstantStringType('MemberAccountLimitReached'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSources'),
                new \PHPStan\Type\Constant\ConstantStringType('Features'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoEnableOrganizationMembers'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Logs'),
                    new \PHPStan\Type\Constant\ConstantStringType('Kubernetes'),
                    new \PHPStan\Type\Constant\ConstantStringType('MalwareProtection'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutoEnable'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AuditLogs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AutoEnable'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScanEc2InstanceWithFindings'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EbsVolumes'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AutoEnable'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoEnable'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalConfiguration'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3_DATA_EVENTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT_LOGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBS_MALWARE_PROTECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('RDS_LOGIN_EVENTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EKS_RUNTIME_MONITORING'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_NETWORK_LOGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNTIME_MONITORING'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NEW'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoEnable'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS_ADDON_MANAGEMENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECS_FARGATE_AGENT_MANAGEMENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2_AGENT_MANAGEMENT'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NEW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                ]),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NEW'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
            ]),
        ]);
    }
    private function describePublishingDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DestinationId'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('PublishingFailureStartTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationProperties'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_VERIFICATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISHING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNABLE_TO_PUBLISH_FIX_DESTINATION_PROPERTY'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function disableOrganizationAdminAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateFromAdministratorAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateFromMasterAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Result'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function enableOrganizationAdminAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAdministratorAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Administrator'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RelationshipStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getCoverageStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CoverageStatistics'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CountByResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CountByCoverageStatus'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                    ]), new \PHPStan\Type\IntegerType()),
                ]),
            ]),
        ]);
    }
    private function getDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('FindingPublishingFrequency'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSources'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Features'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FIFTEEN_MINUTES'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONE_HOUR'),
                    new \PHPStan\Type\Constant\ConstantStringType('SIX_HOURS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CloudTrail'),
                    new \PHPStan\Type\Constant\ConstantStringType('DNSLogs'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowLogs'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Logs'),
                    new \PHPStan\Type\Constant\ConstantStringType('Kubernetes'),
                    new \PHPStan\Type\Constant\ConstantStringType('MalwareProtection'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AuditLogs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScanEc2InstanceWithFindings'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EbsVolumes'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalConfiguration'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FLOW_LOGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUD_TRAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DNS_LOGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3_DATA_EVENTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT_LOGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBS_MALWARE_PROTECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('RDS_LOGIN_EVENTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EKS_RUNTIME_MONITORING'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_NETWORK_LOGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNTIME_MONITORING'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS_ADDON_MANAGEMENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECS_FARGATE_AGENT_MANAGEMENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2_AGENT_MANAGEMENT'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Action'),
                new \PHPStan\Type\Constant\ConstantStringType('Rank'),
                new \PHPStan\Type\Constant\ConstantStringType('FindingCriteria'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NOOP'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVE'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Criterion'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Eq'),
                        new \PHPStan\Type\Constant\ConstantStringType('Neq'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gte'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lte'),
                        new \PHPStan\Type\Constant\ConstantStringType('Equals'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotEquals'),
                        new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                        new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqual'),
                        new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                        new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqual'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Findings'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Partition'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('SchemaVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Service'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedAttackSequenceArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccessKeyDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('EksClusterDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KubernetesDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('EbsVolumeDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('EcsClusterDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContainerDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('RdsDbInstanceDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('RdsLimitlessDbDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('RdsDbUserDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrincipalId'),
                                new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                                new \PHPStan\Type\Constant\ConstantStringType('UserType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DefaultServerSideEncryption'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PublicAccess'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3ObjectDetails'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
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
                                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KmsMasterKeyArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PermissionConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EffectivePermission'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('BucketLevelPermissions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('AccountLevelPermissions'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('AccessControlList'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BucketPolicy'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BlockPublicAccess'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('AllowsPublicReadAccess'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('AllowsPublicWriteAccess'),
                                                ], [
                                                    new \PHPStan\Type\BooleanType(),
                                                    new \PHPStan\Type\BooleanType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('AllowsPublicReadAccess'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('AllowsPublicWriteAccess'),
                                                ], [
                                                    new \PHPStan\Type\BooleanType(),
                                                    new \PHPStan\Type\BooleanType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('IgnorePublicAcls'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('RestrictPublicBuckets'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicAcls'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicPolicy'),
                                                ], [
                                                    new \PHPStan\Type\BooleanType(),
                                                    new \PHPStan\Type\BooleanType(),
                                                    new \PHPStan\Type\BooleanType(),
                                                    new \PHPStan\Type\BooleanType(),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BlockPublicAccess'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('IgnorePublicAcls'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('RestrictPublicBuckets'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicAcls'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicPolicy'),
                                                ], [
                                                    new \PHPStan\Type\BooleanType(),
                                                    new \PHPStan\Type\BooleanType(),
                                                    new \PHPStan\Type\BooleanType(),
                                                    new \PHPStan\Type\BooleanType(),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ObjectArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Hash'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamInstanceProfile'),
                                new \PHPStan\Type\Constant\ConstantStringType('ImageDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceState'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('OutpostArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('LaunchTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                                new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProductCodes'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Addresses'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateDnsName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddresses'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PublicDnsName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PublicIp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('PrivateDnsName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ProductType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
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
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
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
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('KubernetesUserDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KubernetesWorkloadDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SessionName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ImpersonatedUser'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Username'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HostNetwork'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Containers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Volumes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HostIPC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HostPID'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ContainerRuntime'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Image'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ImagePrefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VolumeMounts'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SecurityContext'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('MountPath'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Privileged'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AllowPrivilegeEscalation'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HostPath'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ScannedVolumeDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('SkippedVolumeDetails'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('VolumeArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DeviceName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VolumeSizeInGB'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('VolumeArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DeviceName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VolumeSizeInGB'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActiveServicesCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('RegisteredContainerInstancesCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('RunningTasksCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                                new \PHPStan\Type\Constant\ConstantStringType('TaskDetails'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
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
                                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DefinitionArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TaskCreatedAt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StartedBy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Volumes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Containers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Group'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LaunchType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HostPath'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ContainerRuntime'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Image'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ImagePrefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VolumeMounts'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SecurityContext'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('MountPath'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Privileged'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AllowPrivilegeEscalation'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ContainerRuntime'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Image'),
                                new \PHPStan\Type\Constant\ConstantStringType('ImagePrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeMounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityContext'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MountPath'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Privileged'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AllowPrivilegeEscalation'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DbInstanceIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                                new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbClusterIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbInstanceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
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
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DbShardGroupIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbShardGroupResourceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbShardGroupArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                                new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbClusterIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
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
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('User'),
                                new \PHPStan\Type\Constant\ConstantStringType('Application'),
                                new \PHPStan\Type\Constant\ConstantStringType('Database'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ssl'),
                                new \PHPStan\Type\Constant\ConstantStringType('AuthMethod'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('Role'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
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
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Action'),
                            new \PHPStan\Type\Constant\ConstantStringType('Evidence'),
                            new \PHPStan\Type\Constant\ConstantStringType('Archived'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                            new \PHPStan\Type\Constant\ConstantStringType('DetectorId'),
                            new \PHPStan\Type\Constant\ConstantStringType('EventFirstSeen'),
                            new \PHPStan\Type\Constant\ConstantStringType('EventLastSeen'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserFeedback'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureName'),
                            new \PHPStan\Type\Constant\ConstantStringType('EbsVolumeScanDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('RuntimeDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('Detection'),
                            new \PHPStan\Type\Constant\ConstantStringType('MalwareScanDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ActionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('AwsApiCallAction'),
                                new \PHPStan\Type\Constant\ConstantStringType('DnsRequestAction'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkConnectionAction'),
                                new \PHPStan\Type\Constant\ConstantStringType('PortProbeAction'),
                                new \PHPStan\Type\Constant\ConstantStringType('KubernetesApiCallAction'),
                                new \PHPStan\Type\Constant\ConstantStringType('RdsLoginAttemptAction'),
                                new \PHPStan\Type\Constant\ConstantStringType('KubernetesPermissionCheckedDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KubernetesRoleBindingDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KubernetesRoleDetails'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Api'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CallerType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DomainDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UserAgent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RemoteIpDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RemoteAccountDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AffectedResources'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GeoLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressV4'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressV6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CityName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CountryName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Lat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Lon'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Asn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('AsnOrg'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Isp'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Org'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Affiliated'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Blocked'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DomainWithSuffix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Blocked'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionDirection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LocalPortDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LocalIpDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LocalNetworkInterface'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RemoteIpDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RemotePortDetails'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PortName'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressV4'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressV6'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GeoLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressV4'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressV6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CityName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CountryName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Lat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Lon'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Asn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('AsnOrg'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Isp'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Org'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PortName'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Blocked'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PortProbeDetails'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LocalPortDetails'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LocalIpDetails'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RemoteIpDetails'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PortName'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('IpAddressV4'),
                                                new \PHPStan\Type\Constant\ConstantStringType('IpAddressV6'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('City'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                                new \PHPStan\Type\Constant\ConstantStringType('GeoLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('IpAddressV4'),
                                                new \PHPStan\Type\Constant\ConstantStringType('IpAddressV6'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('CityName'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('CountryName'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Lat'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Lon'),
                                                ], [
                                                    new \PHPStan\Type\FloatType(),
                                                    new \PHPStan\Type\FloatType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Asn'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('AsnOrg'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Isp'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Org'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RequestUri'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Verb'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SourceIps'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UserAgent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RemoteIpDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Subresource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GeoLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressV4'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressV6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CityName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CountryName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Lat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Lon'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Asn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('AsnOrg'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Isp'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Org'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RemoteIpDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LoginAttributes'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GeoLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressV4'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressV6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CityName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CountryName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Lat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Lon'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Asn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('AsnOrg'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Isp'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Org'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('User'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Application'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FailedLoginAttempts'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SuccessfulLoginAttempts'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Verb'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Allowed'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Kind'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoleRefName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoleRefKind'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Kind'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ThreatIntelligenceDetails'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ThreatListName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ThreatNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ThreatFileSha256'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ScanId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ScanStartedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('ScanCompletedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('TriggerFindingId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Sources'),
                                new \PHPStan\Type\Constant\ConstantStringType('ScanDetections'),
                                new \PHPStan\Type\Constant\ConstantStringType('ScanType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ScannedItemCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ThreatsDetectedItemCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HighestSeverityThreatDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ThreatDetectedByName'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TotalGb'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Files'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Volumes'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Files'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ThreatName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UniqueThreatNameCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Shortened'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ThreatNames'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                                                new \PHPStan\Type\Constant\ConstantStringType('FilePaths'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('FilePath'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('VolumeArn'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('Hash'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('FileName'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ])),
                                            ]),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GUARDDUTY_INITIATED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Process'),
                                new \PHPStan\Type\Constant\ConstantStringType('Context'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ExecutablePath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ExecutableSha256'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NamespacePid'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Pwd'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Pid'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Uuid'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParentUuid'),
                                    new \PHPStan\Type\Constant\ConstantStringType('User'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Euid'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Lineage'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NamespacePid'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Pid'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Uuid'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ExecutablePath'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Euid'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ParentUuid'),
                                        ], [
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ModifyingProcess'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ScriptPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LibraryPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LdPreloadValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SocketPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuncBinaryPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReleaseAgentPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MountSource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MountTarget'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FileSystemType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Flags'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ModuleName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ModuleFilePath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ModuleSha256'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ShellHistoryFilePath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TargetProcess'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AddressFamily'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IanaProtocolNumber'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MemoryRegions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ToolName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ToolCategory'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CommandLineExample'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ThreatFilePath'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ExecutablePath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ExecutableSha256'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NamespacePid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Pwd'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Pid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Uuid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ParentUuid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('User'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Euid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Lineage'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NamespacePid'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Pid'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Uuid'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ExecutablePath'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Euid'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ParentUuid'),
                                            ], [
                                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
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
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ExecutablePath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ExecutableSha256'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NamespacePid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Pwd'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Pid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Uuid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ParentUuid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('User'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Euid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Lineage'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NamespacePid'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Pid'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Uuid'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ExecutablePath'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Euid'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ParentUuid'),
                                            ], [
                                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Anomaly'),
                                new \PHPStan\Type\Constant\ConstantStringType('Sequence'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Profiles'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unusual'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ProfileType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ProfileSubtype'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Observations'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('FREQUENCY'),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('FREQUENT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('INFREQUENT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UNSEEN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RARE'),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                    ])))),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Behavior'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ProfileType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ProfileSubtype'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Observations'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('FREQUENCY'),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('FREQUENT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('INFREQUENT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UNSEEN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RARE'),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]))),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Actors'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Signals'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SequenceIndicators'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                            new \PHPStan\Type\Constant\ConstantStringType('User'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Session'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CredentialUid'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Account'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MfaStatus'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                                ]),
                                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Service'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CloudPartition'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Data'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EC2_NETWORK_INTERFACE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('S3_BUCKET'),
                                                new \PHPStan\Type\Constant\ConstantStringType('S3_OBJECT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ACCESS_KEY'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
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
                                                new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Ec2Instance'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AccessKey'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Ec2NetworkInterface'),
                                                new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('EffectivePermission'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('PublicReadAccess'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('PublicWriteAccess'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('AccountPublicAccess'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('BucketPublicAccess'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('S3ObjectUids'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                                    ]),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('PublicAclAccess'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('PublicPolicyAccess'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('PublicAclIgnoreBehavior'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('PublicBucketRestrictBehavior'),
                                                    ], [
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                                        ]),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                                        ]),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('IGNORED'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('NOT_IGNORED'),
                                                        ]),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('RESTRICTED'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('NOT_RESTRICTED'),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('PublicAclAccess'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('PublicPolicyAccess'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('PublicAclIgnoreBehavior'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('PublicBucketRestrictBehavior'),
                                                    ], [
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                                        ]),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                                        ]),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('IGNORED'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('NOT_IGNORED'),
                                                        ]),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('RESTRICTED'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('NOT_RESTRICTED'),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\StringType(),
                                                    ])),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ImageDescription'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceState'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('IamInstanceProfile'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('OutpostArn'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ProductCodes'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Ec2NetworkInterfaceUids'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('ProductType'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ])),
                                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\StringType(),
                                                    ])),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('PrincipalId'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('UserType'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6Addresses'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddresses'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('PublicIp'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SubNetId'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                                ], [
                                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\StringType(),
                                                    ])),
                                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('PrivateDnsName'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ])),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ])),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Ip'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Location'),
                                            new \PHPStan\Type\Constant\ConstantStringType('AutonomousSystem'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Connection'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('City'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Latitude'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Longitude'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\FloatType(),
                                                new \PHPStan\Type\FloatType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('INBOUND'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('OUTBOUND'),
                                                ]),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FirstSeenAt'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LastSeenAt'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceUids'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ActorIds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EndpointIds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SignalIndicators'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('FINDING'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CLOUD_TRAIL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('S3_DATA_EVENTS'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                                                ], [
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('SUSPICIOUS_USER_AGENT'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('SUSPICIOUS_NETWORK'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('MALICIOUS_IP'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('TOR_IP'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('ATTACK_TACTIC'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('HIGH_RISK_API'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('ATTACK_TECHNIQUE'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('UNUSUAL_API_FOR_ACCOUNT'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('UNUSUAL_ASN_FOR_ACCOUNT'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('UNUSUAL_ASN_FOR_USER'),
                                                    ]),
                                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\StringType(),
                                                    ])),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Title'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('SUSPICIOUS_USER_AGENT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SUSPICIOUS_NETWORK'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MALICIOUS_IP'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TOR_IP'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ATTACK_TACTIC'),
                                                new \PHPStan\Type\Constant\ConstantStringType('HIGH_RISK_API'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ATTACK_TECHNIQUE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UNUSUAL_API_FOR_ACCOUNT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UNUSUAL_ASN_FOR_ACCOUNT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UNUSUAL_ASN_FOR_USER'),
                                            ]),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Threats'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ItemPaths'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('NestedItemPath'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Hash'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getFindingsStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FindingStatistics'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CountBySeverity'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupedByAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupedByDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupedByFindingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupedByResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupedBySeverity'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastGeneratedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalFindings'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Date'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastGeneratedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalFindings'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FindingType'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastGeneratedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalFindings'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastGeneratedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalFindings'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LastGeneratedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalFindings'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getIPSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Format'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                    new \PHPStan\Type\Constant\ConstantStringType('STIX'),
                    new \PHPStan\Type\Constant\ConstantStringType('OTX_CSV'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALIEN_VAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROOF_POINT'),
                    new \PHPStan\Type\Constant\ConstantStringType('FIRE_EYE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getInvitationsCount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InvitationsCount'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getMalwareProtectionPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Role'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtectedResource'),
                new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusReasons'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectPrefixes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Tagging'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getMalwareScanSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScanResourceCriteria'),
                new \PHPStan\Type\Constant\ConstantStringType('EbsSnapshotPreservation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Include'),
                    new \PHPStan\Type\Constant\ConstantStringType('Exclude'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE_TAG'), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MapEquals'),
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
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE_TAG'), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MapEquals'),
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
                    ])),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NO_RETENTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('RETENTION_WITH_FINDING'),
                ]),
            ]),
        ]);
    }
    private function getMasterAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Master'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RelationshipStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getMemberDetectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MemberDataSourceConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('Features'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudTrail'),
                            new \PHPStan\Type\Constant\ConstantStringType('DNSLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('FlowLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kubernetes'),
                            new \PHPStan\Type\Constant\ConstantStringType('MalwareProtection'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AuditLogs'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ScanEc2InstanceWithFindings'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EbsVolumes'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('AdditionalConfiguration'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('S3_DATA_EVENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT_LOGS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EBS_MALWARE_PROTECTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RDS_LOGIN_EVENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS_RUNTIME_MONITORING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_NETWORK_LOGS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RUNTIME_MONITORING'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('EKS_ADDON_MANAGEMENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ECS_FARGATE_AGENT_MANAGEMENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EC2_AGENT_MANAGEMENT'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Result'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Members'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MasterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Email'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelationshipStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvitedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdministratorId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Result'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getOrganizationStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationStatistics'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalAccountsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('MemberAccountsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveAccountsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnabledAccountsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('CountByFeature'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnabledAccountsCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('AdditionalConfiguration'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('S3_DATA_EVENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT_LOGS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EBS_MALWARE_PROTECTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RDS_LOGIN_EVENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS_RUNTIME_MONITORING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_NETWORK_LOGS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RUNTIME_MONITORING'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EnabledAccountsCount'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('EKS_ADDON_MANAGEMENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ECS_FARGATE_AGENT_MANAGEMENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EC2_AGENT_MANAGEMENT'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getRemainingFreeTrialDays(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('Features'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudTrail'),
                            new \PHPStan\Type\Constant\ConstantStringType('DnsLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('FlowLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kubernetes'),
                            new \PHPStan\Type\Constant\ConstantStringType('MalwareProtection'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FreeTrialDaysRemaining'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FreeTrialDaysRemaining'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FreeTrialDaysRemaining'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FreeTrialDaysRemaining'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AuditLogs'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FreeTrialDaysRemaining'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ScanEc2InstanceWithFindings'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FreeTrialDaysRemaining'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('FreeTrialDaysRemaining'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FLOW_LOGS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD_TRAIL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DNS_LOGS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3_DATA_EVENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT_LOGS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EBS_MALWARE_PROTECTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RDS_LOGIN_EVENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS_RUNTIME_MONITORING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_NETWORK_LOGS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FARGATE_RUNTIME_MONITORING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2_RUNTIME_MONITORING'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Result'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getThreatIntelSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Format'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                    new \PHPStan\Type\Constant\ConstantStringType('STIX'),
                    new \PHPStan\Type\Constant\ConstantStringType('OTX_CSV'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALIEN_VAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROOF_POINT'),
                    new \PHPStan\Type\Constant\ConstantStringType('FIRE_EYE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getUsageStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UsageStatistics'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SumByAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TopAccountsByFeature'),
                    new \PHPStan\Type\Constant\ConstantStringType('SumByDataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('SumByResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('TopResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('SumByFeature'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Total'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Feature'),
                            new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FLOW_LOGS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CLOUD_TRAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DNS_LOGS'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3_DATA_EVENTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT_LOGS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBS_MALWARE_PROTECTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('RDS_LOGIN_EVENTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_NETWORK_LOGS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EKS_RUNTIME_MONITORING'),
                                new \PHPStan\Type\Constant\ConstantStringType('FARGATE_RUNTIME_MONITORING'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2_RUNTIME_MONITORING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RDS_DBI_PROTECTION_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('RDS_DBI_PROTECTION_SERVERLESS'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Total'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('Total'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FLOW_LOGS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CLOUD_TRAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DNS_LOGS'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3_LOGS'),
                                new \PHPStan\Type\Constant\ConstantStringType('KUBERNETES_AUDIT_LOGS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2_MALWARE_SCAN'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                            new \PHPStan\Type\Constant\ConstantStringType('Total'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                            new \PHPStan\Type\Constant\ConstantStringType('Total'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Feature'),
                            new \PHPStan\Type\Constant\ConstantStringType('Total'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FLOW_LOGS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CLOUD_TRAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DNS_LOGS'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3_DATA_EVENTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT_LOGS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBS_MALWARE_PROTECTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('RDS_LOGIN_EVENTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_NETWORK_LOGS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EKS_RUNTIME_MONITORING'),
                                new \PHPStan\Type\Constant\ConstantStringType('FARGATE_RUNTIME_MONITORING'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2_RUNTIME_MONITORING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RDS_DBI_PROTECTION_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('RDS_DBI_PROTECTION_SERVERLESS'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function inviteMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Result'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listCoverage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoverageStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Issue'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EksClusterDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('EcsClusterDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                                new \PHPStan\Type\Constant\ConstantStringType('CoveredNodes'),
                                new \PHPStan\Type\Constant\ConstantStringType('CompatibleNodes'),
                                new \PHPStan\Type\Constant\ConstantStringType('AddonDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('ManagementType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AddonVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AddonStatus'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTO_MANAGED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                                new \PHPStan\Type\Constant\ConstantStringType('FargateDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContainerInstanceDetails'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Issues'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ManagementType'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AUTO_MANAGED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CoveredContainerInstances'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CompatibleContainerInstances'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('AgentDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('ManagementType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTO_MANAGED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDetectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DetectorIds'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFilters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FilterNames'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FindingIds'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIPSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IpSetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInvitations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Invitations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvitationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelationshipStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvitedAt'),
                    ], [
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
    private function listMalwareProtectionPlans(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MalwareProtectionPlans'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MalwareProtectionPlanId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Members'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MasterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Email'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelationshipStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvitedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdministratorId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
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
        ]);
    }
    private function listOrganizationAdminAccounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdminAccounts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AdminAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdminStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPublishingDestinations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_VERIFICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISHING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNABLE_TO_PUBLISH_FIX_DESTINATION_PROPERTY'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        ]),
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
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listThreatIntelSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ThreatIntelSetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startMalwareScan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScanId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startMonitoringMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Result'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function stopMonitoringMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Result'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function unarchiveFindings(): ?\PHPStan\Type\Type
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
    private function updateDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateFindingsFeedback(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateIPSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateMalwareProtectionPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateMalwareScanSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateMemberDetectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Result'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function updateOrganizationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updatePublishingDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateThreatIntelSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}