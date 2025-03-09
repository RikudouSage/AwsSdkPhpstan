<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class Macie2ClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Macie2\Macie2Client>
     */
    public function getClass(): string
    {
        return \Aws\Macie2\Macie2Client::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptInvitation',
            'batchGetCustomDataIdentifiers',
            'batchUpdateAutomatedDiscoveryAccounts',
            'createAllowList',
            'createClassificationJob',
            'createCustomDataIdentifier',
            'createFindingsFilter',
            'createInvitations',
            'createMember',
            'createSampleFindings',
            'declineInvitations',
            'deleteAllowList',
            'deleteCustomDataIdentifier',
            'deleteFindingsFilter',
            'deleteInvitations',
            'deleteMember',
            'describeBuckets',
            'describeClassificationJob',
            'describeOrganizationConfiguration',
            'disableMacie',
            'disableOrganizationAdminAccount',
            'disassociateFromAdministratorAccount',
            'disassociateFromMasterAccount',
            'disassociateMember',
            'enableMacie',
            'enableOrganizationAdminAccount',
            'getAdministratorAccount',
            'getAllowList',
            'getAutomatedDiscoveryConfiguration',
            'getBucketStatistics',
            'getClassificationExportConfiguration',
            'getClassificationScope',
            'getCustomDataIdentifier',
            'getFindingStatistics',
            'getFindings',
            'getFindingsFilter',
            'getFindingsPublicationConfiguration',
            'getInvitationsCount',
            'getMacieSession',
            'getMasterAccount',
            'getMember',
            'getResourceProfile',
            'getRevealConfiguration',
            'getSensitiveDataOccurrences',
            'getSensitiveDataOccurrencesAvailability',
            'getSensitivityInspectionTemplate',
            'getUsageStatistics',
            'getUsageTotals',
            'listAllowLists',
            'listAutomatedDiscoveryAccounts',
            'listClassificationJobs',
            'listClassificationScopes',
            'listCustomDataIdentifiers',
            'listFindings',
            'listFindingsFilters',
            'listInvitations',
            'listManagedDataIdentifiers',
            'listMembers',
            'listOrganizationAdminAccounts',
            'listResourceProfileArtifacts',
            'listResourceProfileDetections',
            'listSensitivityInspectionTemplates',
            'listTagsForResource',
            'putClassificationExportConfiguration',
            'putFindingsPublicationConfiguration',
            'searchResources',
            'tagResource',
            'testCustomDataIdentifier',
            'untagResource',
            'updateAllowList',
            'updateAutomatedDiscoveryConfiguration',
            'updateClassificationJob',
            'updateClassificationScope',
            'updateFindingsFilter',
            'updateMacieSession',
            'updateMemberSession',
            'updateOrganizationConfiguration',
            'updateResourceProfile',
            'updateResourceProfileDetections',
            'updateRevealConfiguration',
            'updateSensitivityInspectionTemplate',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptInvitation' => $this->acceptInvitation(),
            'batchGetCustomDataIdentifiers' => $this->batchGetCustomDataIdentifiers(),
            'batchUpdateAutomatedDiscoveryAccounts' => $this->batchUpdateAutomatedDiscoveryAccounts(),
            'createAllowList' => $this->createAllowList(),
            'createClassificationJob' => $this->createClassificationJob(),
            'createCustomDataIdentifier' => $this->createCustomDataIdentifier(),
            'createFindingsFilter' => $this->createFindingsFilter(),
            'createInvitations' => $this->createInvitations(),
            'createMember' => $this->createMember(),
            'createSampleFindings' => $this->createSampleFindings(),
            'declineInvitations' => $this->declineInvitations(),
            'deleteAllowList' => $this->deleteAllowList(),
            'deleteCustomDataIdentifier' => $this->deleteCustomDataIdentifier(),
            'deleteFindingsFilter' => $this->deleteFindingsFilter(),
            'deleteInvitations' => $this->deleteInvitations(),
            'deleteMember' => $this->deleteMember(),
            'describeBuckets' => $this->describeBuckets(),
            'describeClassificationJob' => $this->describeClassificationJob(),
            'describeOrganizationConfiguration' => $this->describeOrganizationConfiguration(),
            'disableMacie' => $this->disableMacie(),
            'disableOrganizationAdminAccount' => $this->disableOrganizationAdminAccount(),
            'disassociateFromAdministratorAccount' => $this->disassociateFromAdministratorAccount(),
            'disassociateFromMasterAccount' => $this->disassociateFromMasterAccount(),
            'disassociateMember' => $this->disassociateMember(),
            'enableMacie' => $this->enableMacie(),
            'enableOrganizationAdminAccount' => $this->enableOrganizationAdminAccount(),
            'getAdministratorAccount' => $this->getAdministratorAccount(),
            'getAllowList' => $this->getAllowList(),
            'getAutomatedDiscoveryConfiguration' => $this->getAutomatedDiscoveryConfiguration(),
            'getBucketStatistics' => $this->getBucketStatistics(),
            'getClassificationExportConfiguration' => $this->getClassificationExportConfiguration(),
            'getClassificationScope' => $this->getClassificationScope(),
            'getCustomDataIdentifier' => $this->getCustomDataIdentifier(),
            'getFindingStatistics' => $this->getFindingStatistics(),
            'getFindings' => $this->getFindings(),
            'getFindingsFilter' => $this->getFindingsFilter(),
            'getFindingsPublicationConfiguration' => $this->getFindingsPublicationConfiguration(),
            'getInvitationsCount' => $this->getInvitationsCount(),
            'getMacieSession' => $this->getMacieSession(),
            'getMasterAccount' => $this->getMasterAccount(),
            'getMember' => $this->getMember(),
            'getResourceProfile' => $this->getResourceProfile(),
            'getRevealConfiguration' => $this->getRevealConfiguration(),
            'getSensitiveDataOccurrences' => $this->getSensitiveDataOccurrences(),
            'getSensitiveDataOccurrencesAvailability' => $this->getSensitiveDataOccurrencesAvailability(),
            'getSensitivityInspectionTemplate' => $this->getSensitivityInspectionTemplate(),
            'getUsageStatistics' => $this->getUsageStatistics(),
            'getUsageTotals' => $this->getUsageTotals(),
            'listAllowLists' => $this->listAllowLists(),
            'listAutomatedDiscoveryAccounts' => $this->listAutomatedDiscoveryAccounts(),
            'listClassificationJobs' => $this->listClassificationJobs(),
            'listClassificationScopes' => $this->listClassificationScopes(),
            'listCustomDataIdentifiers' => $this->listCustomDataIdentifiers(),
            'listFindings' => $this->listFindings(),
            'listFindingsFilters' => $this->listFindingsFilters(),
            'listInvitations' => $this->listInvitations(),
            'listManagedDataIdentifiers' => $this->listManagedDataIdentifiers(),
            'listMembers' => $this->listMembers(),
            'listOrganizationAdminAccounts' => $this->listOrganizationAdminAccounts(),
            'listResourceProfileArtifacts' => $this->listResourceProfileArtifacts(),
            'listResourceProfileDetections' => $this->listResourceProfileDetections(),
            'listSensitivityInspectionTemplates' => $this->listSensitivityInspectionTemplates(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putClassificationExportConfiguration' => $this->putClassificationExportConfiguration(),
            'putFindingsPublicationConfiguration' => $this->putFindingsPublicationConfiguration(),
            'searchResources' => $this->searchResources(),
            'tagResource' => $this->tagResource(),
            'testCustomDataIdentifier' => $this->testCustomDataIdentifier(),
            'untagResource' => $this->untagResource(),
            'updateAllowList' => $this->updateAllowList(),
            'updateAutomatedDiscoveryConfiguration' => $this->updateAutomatedDiscoveryConfiguration(),
            'updateClassificationJob' => $this->updateClassificationJob(),
            'updateClassificationScope' => $this->updateClassificationScope(),
            'updateFindingsFilter' => $this->updateFindingsFilter(),
            'updateMacieSession' => $this->updateMacieSession(),
            'updateMemberSession' => $this->updateMemberSession(),
            'updateOrganizationConfiguration' => $this->updateOrganizationConfiguration(),
            'updateResourceProfile' => $this->updateResourceProfile(),
            'updateResourceProfileDetections' => $this->updateResourceProfileDetections(),
            'updateRevealConfiguration' => $this->updateRevealConfiguration(),
            'updateSensitivityInspectionTemplate' => $this->updateSensitivityInspectionTemplate(),
        };
    }
    private function acceptInvitation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function batchGetCustomDataIdentifiers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('customDataIdentifiers'),
                new \PHPStan\Type\Constant\ConstantStringType('notFoundIdentifierIds'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function batchUpdateAutomatedDiscoveryAccounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_PAUSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_NOT_FOUND'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createAllowList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createClassificationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCustomDataIdentifier(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('customDataIdentifierId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFindingsFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createInvitations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('unprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClientError'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function createMember(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
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
    private function declineInvitations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('unprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClientError'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function deleteAllowList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteCustomDataIdentifier(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteFindingsFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteInvitations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('unprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClientError'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function deleteMember(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeBuckets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('buckets'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('allowsUnencryptedObjectUploads'),
                    new \PHPStan\Type\Constant\ConstantStringType('automatedDiscoveryMonitoringStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('bucketArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('bucketCreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('classifiableObjectCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('classifiableSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAutomatedDiscoveryTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('objectCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('objectCountByEncryptionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('publicAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('sensitivityScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverSideEncryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('sharedAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('sizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('sizeInBytesCompressed'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('unclassifiableObjectCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('unclassifiableObjectSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('versioning'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MONITORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_MONITORED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUCKET_COUNT_EXCEEDS_QUOTA'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('isDefinedInJob'),
                        new \PHPStan\Type\Constant\ConstantStringType('isMonitoredByJob'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastJobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastJobRunTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('customerManaged'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsManaged'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Managed'),
                        new \PHPStan\Type\Constant\ConstantStringType('unencrypted'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('effectivePermission'),
                        new \PHPStan\Type\Constant\ConstantStringType('permissionConfiguration'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_PUBLIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountLevelPermissions'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketLevelPermissions'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('blockPublicAccess'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('blockPublicAcls'),
                                    new \PHPStan\Type\Constant\ConstantStringType('blockPublicPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ignorePublicAcls'),
                                    new \PHPStan\Type\Constant\ConstantStringType('restrictPublicBuckets'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('accessControlList'),
                                new \PHPStan\Type\Constant\ConstantStringType('blockPublicAccess'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketPolicy'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('allowsPublicReadAccess'),
                                    new \PHPStan\Type\Constant\ConstantStringType('allowsPublicWriteAccess'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('blockPublicAcls'),
                                    new \PHPStan\Type\Constant\ConstantStringType('blockPublicPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ignorePublicAcls'),
                                    new \PHPStan\Type\Constant\ConstantStringType('restrictPublicBuckets'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('allowsPublicReadAccess'),
                                    new \PHPStan\Type\Constant\ConstantStringType('allowsPublicWriteAccess'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('replicated'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicatedExternally'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicationAccounts'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsMasterKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                            new \PHPStan\Type\Constant\ConstantStringType('aws:kms:dsse'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_SHARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeClassificationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('allowListIds'),
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('customDataIdentifierIds'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('initialRun'),
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('jobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('jobType'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunErrorStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunTime'),
                new \PHPStan\Type\Constant\ConstantStringType('managedDataIdentifierIds'),
                new \PHPStan\Type\Constant\ConstantStringType('managedDataIdentifierSelector'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('s3JobDefinition'),
                new \PHPStan\Type\Constant\ConstantStringType('samplingPercentage'),
                new \PHPStan\Type\Constant\ConstantStringType('scheduleFrequency'),
                new \PHPStan\Type\Constant\ConstantStringType('statistics'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('userPausedDetails'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('IDLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('USER_PAUSED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ONE_TIME'),
                    new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXCLUDE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('RECOMMENDED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucketCriteria'),
                    new \PHPStan\Type\Constant\ConstantStringType('bucketDefinitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('scoping'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                        new \PHPStan\Type\Constant\ConstantStringType('includes'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('and'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('simpleCriterion'),
                                new \PHPStan\Type\Constant\ConstantStringType('tagCriterion'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('comparator'),
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQ'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_ID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3_BUCKET_NAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3_BUCKET_EFFECTIVE_PERMISSION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3_BUCKET_SHARED_ACCESS'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('comparator'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tagValues'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQ'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('and'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('simpleCriterion'),
                                new \PHPStan\Type\Constant\ConstantStringType('tagCriterion'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('comparator'),
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQ'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_ID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3_BUCKET_NAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3_BUCKET_EFFECTIVE_PERMISSION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3_BUCKET_SHARED_ACCESS'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('comparator'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tagValues'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQ'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('buckets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                        new \PHPStan\Type\Constant\ConstantStringType('includes'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('and'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('simpleScopeTerm'),
                                new \PHPStan\Type\Constant\ConstantStringType('tagScopeTerm'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('comparator'),
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQ'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OBJECT_EXTENSION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OBJECT_LAST_MODIFIED_DATE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OBJECT_SIZE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OBJECT_KEY'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('comparator'),
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tagValues'),
                                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQ'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3_OBJECT'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('and'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('simpleScopeTerm'),
                                new \PHPStan\Type\Constant\ConstantStringType('tagScopeTerm'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('comparator'),
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQ'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OBJECT_EXTENSION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OBJECT_LAST_MODIFIED_DATE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OBJECT_SIZE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OBJECT_KEY'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('comparator'),
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tagValues'),
                                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQ'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3_OBJECT'),
                                ]),
                            ])),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dailySchedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('monthlySchedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('weeklySchedule'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dayOfMonth'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dayOfWeek'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('approximateNumberOfObjectsToProcess'),
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfRuns'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobExpiresAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobImminentExpirationHealthEventArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobPausedAt'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeOrganizationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('autoEnable'),
                new \PHPStan\Type\Constant\ConstantStringType('maxAccountLimitReached'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function disableMacie(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
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
    private function disassociateMember(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function enableMacie(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
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
                new \PHPStan\Type\Constant\ConstantStringType('administrator'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('invitationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('invitedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('relationshipStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                        new \PHPStan\Type\Constant\ConstantStringType('Invited'),
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('Removed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailVerificationInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailVerificationFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegionDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountSuspended'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getAllowList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('criteria'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3WordsList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('objectKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OK'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3_OBJECT_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3_USER_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3_OBJECT_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3_THROTTLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3_OBJECT_OVERSIZE'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3_OBJECT_EMPTY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN_ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getAutomatedDiscoveryConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('autoEnableOrganizationMembers'),
                new \PHPStan\Type\Constant\ConstantStringType('classificationScopeId'),
                new \PHPStan\Type\Constant\ConstantStringType('disabledAt'),
                new \PHPStan\Type\Constant\ConstantStringType('firstEnabledAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('sensitivityInspectionTemplateId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    new \PHPStan\Type\Constant\ConstantStringType('NEW'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
            ]),
        ]);
    }
    private function getBucketStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('bucketCount'),
                new \PHPStan\Type\Constant\ConstantStringType('bucketCountByEffectivePermission'),
                new \PHPStan\Type\Constant\ConstantStringType('bucketCountByEncryptionType'),
                new \PHPStan\Type\Constant\ConstantStringType('bucketCountByObjectEncryptionRequirement'),
                new \PHPStan\Type\Constant\ConstantStringType('bucketCountBySharedAccessType'),
                new \PHPStan\Type\Constant\ConstantStringType('bucketStatisticsBySensitivity'),
                new \PHPStan\Type\Constant\ConstantStringType('classifiableObjectCount'),
                new \PHPStan\Type\Constant\ConstantStringType('classifiableSizeInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                new \PHPStan\Type\Constant\ConstantStringType('objectCount'),
                new \PHPStan\Type\Constant\ConstantStringType('sizeInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('sizeInBytesCompressed'),
                new \PHPStan\Type\Constant\ConstantStringType('unclassifiableObjectCount'),
                new \PHPStan\Type\Constant\ConstantStringType('unclassifiableObjectSizeInBytes'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('publiclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('publiclyReadable'),
                    new \PHPStan\Type\Constant\ConstantStringType('publiclyWritable'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kmsManaged'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Managed'),
                    new \PHPStan\Type\Constant\ConstantStringType('unencrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('allowsUnencryptedObjectUploads'),
                    new \PHPStan\Type\Constant\ConstantStringType('deniesUnencryptedObjectUploads'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('external'),
                    new \PHPStan\Type\Constant\ConstantStringType('internal'),
                    new \PHPStan\Type\Constant\ConstantStringType('notShared'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('classificationError'),
                    new \PHPStan\Type\Constant\ConstantStringType('notClassified'),
                    new \PHPStan\Type\Constant\ConstantStringType('notSensitive'),
                    new \PHPStan\Type\Constant\ConstantStringType('sensitive'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('classifiableSizeInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('publiclyAccessibleCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalSizeInBytes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('classifiableSizeInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('publiclyAccessibleCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalSizeInBytes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('classifiableSizeInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('publiclyAccessibleCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalSizeInBytes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('classifiableSizeInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('publiclyAccessibleCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalSizeInBytes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                    new \PHPStan\Type\Constant\ConstantStringType('storageClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('total'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                    new \PHPStan\Type\Constant\ConstantStringType('storageClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('total'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getClassificationExportConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('keyPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getClassificationScope(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('s3'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucketNames'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getCustomDataIdentifier(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('ignoreWords'),
                new \PHPStan\Type\Constant\ConstantStringType('keywords'),
                new \PHPStan\Type\Constant\ConstantStringType('maximumMatchDistance'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('regex'),
                new \PHPStan\Type\Constant\ConstantStringType('severityLevels'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('occurrencesThreshold'),
                    new \PHPStan\Type\Constant\ConstantStringType('severity'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getFindingStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('countsByGroup'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('count'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupKey'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('findings'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('archived'),
                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                    new \PHPStan\Type\Constant\ConstantStringType('classificationDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('count'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('partition'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourcesAffected'),
                    new \PHPStan\Type\Constant\ConstantStringType('sample'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLASSIFICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('POLICY'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('detailedResultsLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('originType'),
                        new \PHPStan\Type\Constant\ConstantStringType('result'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SENSITIVE_DATA_DISCOVERY_JOB'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATED_SENSITIVE_DATA_DISCOVERY'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('additionalOccurrences'),
                            new \PHPStan\Type\Constant\ConstantStringType('customDataIdentifiers'),
                            new \PHPStan\Type\Constant\ConstantStringType('mimeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('sensitiveData'),
                            new \PHPStan\Type\Constant\ConstantStringType('sizeClassified'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('detections'),
                                new \PHPStan\Type\Constant\ConstantStringType('totalCount'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('count'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('occurrences'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('cells'),
                                        new \PHPStan\Type\Constant\ConstantStringType('lineRanges'),
                                        new \PHPStan\Type\Constant\ConstantStringType('offsetRanges'),
                                        new \PHPStan\Type\Constant\ConstantStringType('pages'),
                                        new \PHPStan\Type\Constant\ConstantStringType('records'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('cellReference'),
                                            new \PHPStan\Type\Constant\ConstantStringType('column'),
                                            new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('row'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('end'),
                                            new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            new \PHPStan\Type\Constant\ConstantStringType('startColumn'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('end'),
                                            new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            new \PHPStan\Type\Constant\ConstantStringType('startColumn'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('lineRange'),
                                            new \PHPStan\Type\Constant\ConstantStringType('offsetRange'),
                                            new \PHPStan\Type\Constant\ConstantStringType('pageNumber'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                                new \PHPStan\Type\Constant\ConstantStringType('startColumn'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                                new \PHPStan\Type\Constant\ConstantStringType('startColumn'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('jsonPath'),
                                            new \PHPStan\Type\Constant\ConstantStringType('recordIndex'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                    ]),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('category'),
                                new \PHPStan\Type\Constant\ConstantStringType('detections'),
                                new \PHPStan\Type\Constant\ConstantStringType('totalCount'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FINANCIAL_INFORMATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PERSONAL_INFORMATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_IDENTIFIER'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('count'),
                                    new \PHPStan\Type\Constant\ConstantStringType('occurrences'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('cells'),
                                        new \PHPStan\Type\Constant\ConstantStringType('lineRanges'),
                                        new \PHPStan\Type\Constant\ConstantStringType('offsetRanges'),
                                        new \PHPStan\Type\Constant\ConstantStringType('pages'),
                                        new \PHPStan\Type\Constant\ConstantStringType('records'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('cellReference'),
                                            new \PHPStan\Type\Constant\ConstantStringType('column'),
                                            new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('row'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('end'),
                                            new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            new \PHPStan\Type\Constant\ConstantStringType('startColumn'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('end'),
                                            new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            new \PHPStan\Type\Constant\ConstantStringType('startColumn'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('lineRange'),
                                            new \PHPStan\Type\Constant\ConstantStringType('offsetRange'),
                                            new \PHPStan\Type\Constant\ConstantStringType('pageNumber'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                                new \PHPStan\Type\Constant\ConstantStringType('startColumn'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                                new \PHPStan\Type\Constant\ConstantStringType('startColumn'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('jsonPath'),
                                            new \PHPStan\Type\Constant\ConstantStringType('recordIndex'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                                new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                        new \PHPStan\Type\Constant\ConstantStringType('actor'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_API_CALL'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('api'),
                                new \PHPStan\Type\Constant\ConstantStringType('apiServiceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('firstSeen'),
                                new \PHPStan\Type\Constant\ConstantStringType('lastSeen'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('domainDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipAddressDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('userIdentity'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ipAddressV4'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipCity'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipCountry'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipGeoLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipOwner'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('lat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('lon'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('asn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('asnOrg'),
                                    new \PHPStan\Type\Constant\ConstantStringType('isp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('org'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('assumedRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('awsAccount'),
                                new \PHPStan\Type\Constant\ConstantStringType('awsService'),
                                new \PHPStan\Type\Constant\ConstantStringType('federatedUser'),
                                new \PHPStan\Type\Constant\ConstantStringType('iamUser'),
                                new \PHPStan\Type\Constant\ConstantStringType('root'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('accessKeyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('principalId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sessionContext'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sessionIssuer'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                                            new \PHPStan\Type\Constant\ConstantStringType('mfaAuthenticated'),
                                        ], [
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('principalId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('userName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('principalId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('invokedBy'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('accessKeyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('principalId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sessionContext'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sessionIssuer'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                                            new \PHPStan\Type\Constant\ConstantStringType('mfaAuthenticated'),
                                        ], [
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('principalId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('userName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('principalId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('userName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('principalId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AssumedRole'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IAMUser'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FederatedUser'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Root'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AWSAccount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AWSService'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Object'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('allowsUnencryptedObjectUploads'),
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('defaultServerSideEncryption'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('owner'),
                            new \PHPStan\Type\Constant\ConstantStringType('publicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('encryptionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('kmsMasterKeyId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms:dsse'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('effectivePermission'),
                                new \PHPStan\Type\Constant\ConstantStringType('permissionConfiguration'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_PUBLIC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('accountLevelPermissions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('bucketLevelPermissions'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('blockPublicAccess'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('blockPublicAcls'),
                                            new \PHPStan\Type\Constant\ConstantStringType('blockPublicPolicy'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ignorePublicAcls'),
                                            new \PHPStan\Type\Constant\ConstantStringType('restrictPublicBuckets'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('accessControlList'),
                                        new \PHPStan\Type\Constant\ConstantStringType('blockPublicAccess'),
                                        new \PHPStan\Type\Constant\ConstantStringType('bucketPolicy'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('allowsPublicReadAccess'),
                                            new \PHPStan\Type\Constant\ConstantStringType('allowsPublicWriteAccess'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('blockPublicAcls'),
                                            new \PHPStan\Type\Constant\ConstantStringType('blockPublicPolicy'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ignorePublicAcls'),
                                            new \PHPStan\Type\Constant\ConstantStringType('restrictPublicBuckets'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('allowsPublicReadAccess'),
                                            new \PHPStan\Type\Constant\ConstantStringType('allowsPublicWriteAccess'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('eTag'),
                            new \PHPStan\Type\Constant\ConstantStringType('extension'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                            new \PHPStan\Type\Constant\ConstantStringType('publicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('serverSideEncryption'),
                            new \PHPStan\Type\Constant\ConstantStringType('size'),
                            new \PHPStan\Type\Constant\ConstantStringType('storageClass'),
                            new \PHPStan\Type\Constant\ConstantStringType('tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('versionId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('encryptionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('kmsMasterKeyId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms:dsse'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                new \PHPStan\Type\Constant\ConstantStringType('REDUCED_REDUNDANCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                                new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                                new \PHPStan\Type\Constant\ConstantStringType('GLACIER_IR'),
                                new \PHPStan\Type\Constant\ConstantStringType('OUTPOSTS'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('score'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Low'),
                            new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                            new \PHPStan\Type\Constant\ConstantStringType('High'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SensitiveData:S3Object/Multiple'),
                        new \PHPStan\Type\Constant\ConstantStringType('SensitiveData:S3Object/Financial'),
                        new \PHPStan\Type\Constant\ConstantStringType('SensitiveData:S3Object/Personal'),
                        new \PHPStan\Type\Constant\ConstantStringType('SensitiveData:S3Object/Credentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('SensitiveData:S3Object/CustomIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Policy:IAMUser/S3BucketPublic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Policy:IAMUser/S3BucketSharedExternally'),
                        new \PHPStan\Type\Constant\ConstantStringType('Policy:IAMUser/S3BucketReplicatedExternally'),
                        new \PHPStan\Type\Constant\ConstantStringType('Policy:IAMUser/S3BucketEncryptionDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Policy:IAMUser/S3BlockPublicAccessDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Policy:IAMUser/S3BucketSharedWithCloudFront'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function getFindingsFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('action'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('findingCriteria'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOOP'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('criterion'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eq'),
                        new \PHPStan\Type\Constant\ConstantStringType('eqExactMatch'),
                        new \PHPStan\Type\Constant\ConstantStringType('gt'),
                        new \PHPStan\Type\Constant\ConstantStringType('gte'),
                        new \PHPStan\Type\Constant\ConstantStringType('lt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lte'),
                        new \PHPStan\Type\Constant\ConstantStringType('neq'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getFindingsPublicationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('securityHubConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('publishClassificationFindings'),
                    new \PHPStan\Type\Constant\ConstantStringType('publishPolicyFindings'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getInvitationsCount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('invitationsCount'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getMacieSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('findingPublishingFrequency'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FIFTEEN_MINUTES'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONE_HOUR'),
                    new \PHPStan\Type\Constant\ConstantStringType('SIX_HOURS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getMasterAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('master'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('invitationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('invitedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('relationshipStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                        new \PHPStan\Type\Constant\ConstantStringType('Invited'),
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('Removed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailVerificationInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailVerificationFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegionDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountSuspended'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getMember(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                new \PHPStan\Type\Constant\ConstantStringType('administratorAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('email'),
                new \PHPStan\Type\Constant\ConstantStringType('invitedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('masterAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('relationshipStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                    new \PHPStan\Type\Constant\ConstantStringType('Invited'),
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('Removed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resigned'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailVerificationInProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailVerificationFailed'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegionDisabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountSuspended'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getResourceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('profileUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('sensitivityScore'),
                new \PHPStan\Type\Constant\ConstantStringType('sensitivityScoreOverridden'),
                new \PHPStan\Type\Constant\ConstantStringType('statistics'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('totalBytesClassified'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalDetections'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalDetectionsSuppressed'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalItemsClassified'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalItemsSensitive'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalItemsSkipped'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalItemsSkippedInvalidEncryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalItemsSkippedInvalidKms'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalItemsSkippedPermissionDenied'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
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
    private function getRevealConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('retrievalConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('retrievalMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CALLER_CREDENTIALS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSUME_ROLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getSensitiveDataOccurrences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('error'),
                new \PHPStan\Type\Constant\ConstantStringType('sensitiveDataOccurrences'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]))),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
            ]),
        ]);
    }
    private function getSensitiveDataOccurrencesAvailability(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('code'),
                new \PHPStan\Type\Constant\ConstantStringType('reasons'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OBJECT_EXCEEDS_SIZE_QUOTA'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_OBJECT_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_FINDING_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_CLASSIFICATION_RESULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('OBJECT_UNAVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_NOT_IN_ORGANIZATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('MISSING_GET_MEMBER_PERMISSION'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLE_TOO_PERMISSIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MEMBER_ROLE_TOO_PERMISSIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_RESULT_SIGNATURE'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESULT_NOT_SIGNED'),
                ])),
            ]),
        ]);
    }
    private function getSensitivityInspectionTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                new \PHPStan\Type\Constant\ConstantStringType('includes'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('sensitivityInspectionTemplateId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('managedDataIdentifierIds'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('allowListIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDataIdentifierIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('managedDataIdentifierIds'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getUsageStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('records'),
                new \PHPStan\Type\Constant\ConstantStringType('timeRange'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('automatedDiscoveryFreeTrialStartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('freeTrialStartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('usage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedCost'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceLimit'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('isServiceLimited'),
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantStringType('TERABYTES'),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DATA_INVENTORY_EVALUATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SENSITIVE_DATA_DISCOVERY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATED_SENSITIVE_DATA_DISCOVERY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATED_OBJECT_MONITORING'),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('MONTH_TO_DATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PAST_30_DAYS'),
                ]),
            ]),
        ]);
    }
    private function getUsageTotals(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('timeRange'),
                new \PHPStan\Type\Constant\ConstantStringType('usageTotals'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('MONTH_TO_DATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PAST_30_DAYS'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('currency'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedCost'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DATA_INVENTORY_EVALUATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SENSITIVE_DATA_DISCOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATED_SENSITIVE_DATA_DISCOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATED_OBJECT_MONITORING'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listAllowLists(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('allowLists'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAutomatedDiscoveryAccounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listClassificationJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucketCriteria'),
                    new \PHPStan\Type\Constant\ConstantStringType('bucketDefinitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobType'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRunErrorStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('userPausedDetails'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                        new \PHPStan\Type\Constant\ConstantStringType('includes'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('and'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('simpleCriterion'),
                                new \PHPStan\Type\Constant\ConstantStringType('tagCriterion'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('comparator'),
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQ'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_ID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3_BUCKET_NAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3_BUCKET_EFFECTIVE_PERMISSION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3_BUCKET_SHARED_ACCESS'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('comparator'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tagValues'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQ'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('and'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('simpleCriterion'),
                                new \PHPStan\Type\Constant\ConstantStringType('tagCriterion'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('comparator'),
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQ'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_ID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3_BUCKET_NAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3_BUCKET_EFFECTIVE_PERMISSION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3_BUCKET_SHARED_ACCESS'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('comparator'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tagValues'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQ'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('buckets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IDLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('USER_PAUSED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ONE_TIME'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('jobExpiresAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobImminentExpirationHealthEventArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobPausedAt'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listClassificationScopes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('classificationScopes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCustomDataIdentifiers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
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
    private function listFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('findingIds'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFindingsFilters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('findingsFilterListItems'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOOP'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInvitations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('invitations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('invitationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('invitedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('relationshipStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                        new \PHPStan\Type\Constant\ConstantStringType('Invited'),
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('Removed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailVerificationInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailVerificationFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegionDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountSuspended'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listManagedDataIdentifiers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FINANCIAL_INFORMATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PERSONAL_INFORMATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREDENTIALS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_IDENTIFIER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('members'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('administratorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('email'),
                    new \PHPStan\Type\Constant\ConstantStringType('invitedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('masterAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('relationshipStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                        new \PHPStan\Type\Constant\ConstantStringType('Invited'),
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('Removed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailVerificationInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailVerificationFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegionDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountSuspended'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOrganizationAdminAccounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('adminAccounts'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLING_IN_PROGRESS'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceProfileArtifacts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('artifacts'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('classificationResultStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('sensitive'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceProfileDetections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('detections'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('count'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('suppressed'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANAGED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSensitivityInspectionTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('sensitivityInspectionTemplates'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function putClassificationExportConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('keyPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putFindingsPublicationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function searchResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('matchingResources'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('matchingBucket'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('automatedDiscoveryMonitoringStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('classifiableObjectCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('classifiableSizeInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastAutomatedDiscoveryTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('objectCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('objectCountByEncryptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('sensitivityScore'),
                        new \PHPStan\Type\Constant\ConstantStringType('sizeInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('sizeInBytesCompressed'),
                        new \PHPStan\Type\Constant\ConstantStringType('unclassifiableObjectCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('unclassifiableObjectSizeInBytes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MONITORED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_MONITORED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUCKET_COUNT_EXCEEDS_QUOTA'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('isDefinedInJob'),
                            new \PHPStan\Type\Constant\ConstantStringType('isMonitoredByJob'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastJobId'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastJobRunTime'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('customerManaged'),
                            new \PHPStan\Type\Constant\ConstantStringType('kmsManaged'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Managed'),
                            new \PHPStan\Type\Constant\ConstantStringType('unencrypted'),
                            new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                            new \PHPStan\Type\Constant\ConstantStringType('storageClass'),
                            new \PHPStan\Type\Constant\ConstantStringType('total'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                            new \PHPStan\Type\Constant\ConstantStringType('storageClass'),
                            new \PHPStan\Type\Constant\ConstantStringType('total'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
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
    private function testCustomDataIdentifier(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('matchCount'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateAllowList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateAutomatedDiscoveryConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateClassificationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateClassificationScope(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateFindingsFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateMacieSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateMemberSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateOrganizationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateResourceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateResourceProfileDetections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateRevealConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('retrievalConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('retrievalMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CALLER_CREDENTIALS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSUME_ROLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateSensitivityInspectionTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}