<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class AuditManagerClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\AuditManager\AuditManagerClient>
     */
    public function getClass(): string
    {
        return \Aws\AuditManager\AuditManagerClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateAssessmentReportEvidenceFolder',
            'batchAssociateAssessmentReportEvidence',
            'batchCreateDelegationByAssessment',
            'batchDeleteDelegationByAssessment',
            'batchDisassociateAssessmentReportEvidence',
            'batchImportEvidenceToAssessmentControl',
            'createAssessment',
            'createAssessmentFramework',
            'createAssessmentReport',
            'createControl',
            'deleteAssessment',
            'deleteAssessmentFramework',
            'deleteAssessmentFrameworkShare',
            'deleteAssessmentReport',
            'deleteControl',
            'deregisterAccount',
            'deregisterOrganizationAdminAccount',
            'disassociateAssessmentReportEvidenceFolder',
            'getAccountStatus',
            'getAssessment',
            'getAssessmentFramework',
            'getAssessmentReportUrl',
            'getChangeLogs',
            'getControl',
            'getDelegations',
            'getEvidence',
            'getEvidenceByEvidenceFolder',
            'getEvidenceFileUploadUrl',
            'getEvidenceFolder',
            'getEvidenceFoldersByAssessment',
            'getEvidenceFoldersByAssessmentControl',
            'getInsights',
            'getInsightsByAssessment',
            'getOrganizationAdminAccount',
            'getServicesInScope',
            'getSettings',
            'listAssessmentControlInsightsByControlDomain',
            'listAssessmentFrameworkShareRequests',
            'listAssessmentFrameworks',
            'listAssessmentReports',
            'listAssessments',
            'listControlDomainInsights',
            'listControlDomainInsightsByAssessment',
            'listControlInsightsByControlDomain',
            'listControls',
            'listKeywordsForDataSource',
            'listNotifications',
            'listTagsForResource',
            'registerAccount',
            'registerOrganizationAdminAccount',
            'startAssessmentFrameworkShare',
            'tagResource',
            'untagResource',
            'updateAssessment',
            'updateAssessmentControl',
            'updateAssessmentControlSetStatus',
            'updateAssessmentFramework',
            'updateAssessmentFrameworkShare',
            'updateAssessmentStatus',
            'updateControl',
            'updateSettings',
            'validateAssessmentReportIntegrity',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateAssessmentReportEvidenceFolder' => $this->associateAssessmentReportEvidenceFolder(),
            'batchAssociateAssessmentReportEvidence' => $this->batchAssociateAssessmentReportEvidence(),
            'batchCreateDelegationByAssessment' => $this->batchCreateDelegationByAssessment(),
            'batchDeleteDelegationByAssessment' => $this->batchDeleteDelegationByAssessment(),
            'batchDisassociateAssessmentReportEvidence' => $this->batchDisassociateAssessmentReportEvidence(),
            'batchImportEvidenceToAssessmentControl' => $this->batchImportEvidenceToAssessmentControl(),
            'createAssessment' => $this->createAssessment(),
            'createAssessmentFramework' => $this->createAssessmentFramework(),
            'createAssessmentReport' => $this->createAssessmentReport(),
            'createControl' => $this->createControl(),
            'deleteAssessment' => $this->deleteAssessment(),
            'deleteAssessmentFramework' => $this->deleteAssessmentFramework(),
            'deleteAssessmentFrameworkShare' => $this->deleteAssessmentFrameworkShare(),
            'deleteAssessmentReport' => $this->deleteAssessmentReport(),
            'deleteControl' => $this->deleteControl(),
            'deregisterAccount' => $this->deregisterAccount(),
            'deregisterOrganizationAdminAccount' => $this->deregisterOrganizationAdminAccount(),
            'disassociateAssessmentReportEvidenceFolder' => $this->disassociateAssessmentReportEvidenceFolder(),
            'getAccountStatus' => $this->getAccountStatus(),
            'getAssessment' => $this->getAssessment(),
            'getAssessmentFramework' => $this->getAssessmentFramework(),
            'getAssessmentReportUrl' => $this->getAssessmentReportUrl(),
            'getChangeLogs' => $this->getChangeLogs(),
            'getControl' => $this->getControl(),
            'getDelegations' => $this->getDelegations(),
            'getEvidence' => $this->getEvidence(),
            'getEvidenceByEvidenceFolder' => $this->getEvidenceByEvidenceFolder(),
            'getEvidenceFileUploadUrl' => $this->getEvidenceFileUploadUrl(),
            'getEvidenceFolder' => $this->getEvidenceFolder(),
            'getEvidenceFoldersByAssessment' => $this->getEvidenceFoldersByAssessment(),
            'getEvidenceFoldersByAssessmentControl' => $this->getEvidenceFoldersByAssessmentControl(),
            'getInsights' => $this->getInsights(),
            'getInsightsByAssessment' => $this->getInsightsByAssessment(),
            'getOrganizationAdminAccount' => $this->getOrganizationAdminAccount(),
            'getServicesInScope' => $this->getServicesInScope(),
            'getSettings' => $this->getSettings(),
            'listAssessmentControlInsightsByControlDomain' => $this->listAssessmentControlInsightsByControlDomain(),
            'listAssessmentFrameworkShareRequests' => $this->listAssessmentFrameworkShareRequests(),
            'listAssessmentFrameworks' => $this->listAssessmentFrameworks(),
            'listAssessmentReports' => $this->listAssessmentReports(),
            'listAssessments' => $this->listAssessments(),
            'listControlDomainInsights' => $this->listControlDomainInsights(),
            'listControlDomainInsightsByAssessment' => $this->listControlDomainInsightsByAssessment(),
            'listControlInsightsByControlDomain' => $this->listControlInsightsByControlDomain(),
            'listControls' => $this->listControls(),
            'listKeywordsForDataSource' => $this->listKeywordsForDataSource(),
            'listNotifications' => $this->listNotifications(),
            'listTagsForResource' => $this->listTagsForResource(),
            'registerAccount' => $this->registerAccount(),
            'registerOrganizationAdminAccount' => $this->registerOrganizationAdminAccount(),
            'startAssessmentFrameworkShare' => $this->startAssessmentFrameworkShare(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAssessment' => $this->updateAssessment(),
            'updateAssessmentControl' => $this->updateAssessmentControl(),
            'updateAssessmentControlSetStatus' => $this->updateAssessmentControlSetStatus(),
            'updateAssessmentFramework' => $this->updateAssessmentFramework(),
            'updateAssessmentFrameworkShare' => $this->updateAssessmentFrameworkShare(),
            'updateAssessmentStatus' => $this->updateAssessmentStatus(),
            'updateControl' => $this->updateControl(),
            'updateSettings' => $this->updateSettings(),
            'validateAssessmentReportIntegrity' => $this->validateAssessmentReportIntegrity(),
        };
    }
    private function associateAssessmentReportEvidenceFolder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function batchAssociateAssessmentReportEvidence(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('evidenceIds'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchCreateDelegationByAssessment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('delegations'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createDelegationRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comment'),
                            new \PHPStan\Type\Constant\ConstantStringType('controlSetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchDeleteDelegationByAssessment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('delegationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchDisassociateAssessmentReportEvidence(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('evidenceIds'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchImportEvidenceToAssessmentControl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('manualEvidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3ResourcePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('textResponse'),
                            new \PHPStan\Type\Constant\ConstantStringType('evidenceFileName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createAssessment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('framework'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('complianceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentReportsDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('scope'),
                        new \PHPStan\Type\Constant\ConstantStringType('roles'),
                        new \PHPStan\Type\Constant\ConstantStringType('delegations'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('destinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('destination'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsAccounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsServices'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                                new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                                new \PHPStan\Type\Constant\ConstantStringType('controlSetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('comment'),
                                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlSets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('logo'),
                            new \PHPStan\Type\Constant\ConstantStringType('complianceType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('roles'),
                                new \PHPStan\Type\Constant\ConstantStringType('controls'),
                                new \PHPStan\Type\Constant\ConstantStringType('delegations'),
                                new \PHPStan\Type\Constant\ConstantStringType('systemEvidenceCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('manualEvidenceCount'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REVIEWED'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                                        new \PHPStan\Type\Constant\ConstantStringType('response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('comments'),
                                        new \PHPStan\Type\Constant\ConstantStringType('evidenceSources'),
                                        new \PHPStan\Type\Constant\ConstantStringType('evidenceCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('assessmentReportEvidenceCount'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('REVIEWED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DEFER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IGNORE'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('authorName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('commentBody'),
                                                new \PHPStan\Type\Constant\ConstantStringType('postedDate'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                                        new \PHPStan\Type\Constant\ConstantStringType('controlSetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('comment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                        ]),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createAssessmentFramework(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('framework'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('complianceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('logo'),
                    new \PHPStan\Type\Constant\ConstantStringType('controlSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('controlSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                        new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('controls'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('testingInformation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionPlanTitle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionPlanInstructions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('controlSources'),
                                    new \PHPStan\Type\Constant\ConstantStringType('controlMappingSources'),
                                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Core'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceDescription'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceSetUpOption'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceKeyword'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceFrequency'),
                                            new \PHPStan\Type\Constant\ConstantStringType('troubleshootingText'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('System_Controls_Mapping'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Procedural_Controls_Mapping'),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Cloudtrail'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Config'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Security_Hub'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_API_Call'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Common_Control'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Core_Control'),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('keywordInputType'),
                                                new \PHPStan\Type\Constant\ConstantStringType('keywordValue'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_FROM_LIST'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_FILE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('INPUT_TEXT'),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('WEEKLY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('END_OF_SUPPORT'),
                                    ]),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createAssessmentReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentReport'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('author'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createControl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('control'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('testingInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionPlanTitle'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionPlanInstructions'),
                    new \PHPStan\Type\Constant\ConstantStringType('controlSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('controlMappingSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                        new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                        new \PHPStan\Type\Constant\ConstantStringType('Core'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceSetUpOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceKeyword'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceFrequency'),
                            new \PHPStan\Type\Constant\ConstantStringType('troubleshootingText'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('System_Controls_Mapping'),
                                new \PHPStan\Type\Constant\ConstantStringType('Procedural_Controls_Mapping'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Cloudtrail'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Config'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Security_Hub'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_API_Call'),
                                new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('Common_Control'),
                                new \PHPStan\Type\Constant\ConstantStringType('Core_Control'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('keywordInputType'),
                                new \PHPStan\Type\Constant\ConstantStringType('keywordValue'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_FROM_LIST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_FILE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INPUT_TEXT'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                                new \PHPStan\Type\Constant\ConstantStringType('WEEKLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('END_OF_SUPPORT'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteAssessment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAssessmentFramework(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAssessmentFrameworkShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAssessmentReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteControl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACTIVATION'),
                ]),
            ]),
        ]);
    }
    private function deregisterOrganizationAdminAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateAssessmentReportEvidenceFolder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAccountStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACTIVATION'),
                ]),
            ]),
        ]);
    }
    private function getAssessment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessment'),
                new \PHPStan\Type\Constant\ConstantStringType('userRole'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('framework'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('complianceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentReportsDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('scope'),
                        new \PHPStan\Type\Constant\ConstantStringType('roles'),
                        new \PHPStan\Type\Constant\ConstantStringType('delegations'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('destinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('destination'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsAccounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsServices'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                                new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                                new \PHPStan\Type\Constant\ConstantStringType('controlSetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('comment'),
                                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlSets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('logo'),
                            new \PHPStan\Type\Constant\ConstantStringType('complianceType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('roles'),
                                new \PHPStan\Type\Constant\ConstantStringType('controls'),
                                new \PHPStan\Type\Constant\ConstantStringType('delegations'),
                                new \PHPStan\Type\Constant\ConstantStringType('systemEvidenceCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('manualEvidenceCount'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REVIEWED'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                                        new \PHPStan\Type\Constant\ConstantStringType('response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('comments'),
                                        new \PHPStan\Type\Constant\ConstantStringType('evidenceSources'),
                                        new \PHPStan\Type\Constant\ConstantStringType('evidenceCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('assessmentReportEvidenceCount'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('REVIEWED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DEFER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IGNORE'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('authorName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('commentBody'),
                                                new \PHPStan\Type\Constant\ConstantStringType('postedDate'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                                        new \PHPStan\Type\Constant\ConstantStringType('controlSetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('comment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                        ]),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getAssessmentFramework(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('framework'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('complianceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('logo'),
                    new \PHPStan\Type\Constant\ConstantStringType('controlSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('controlSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                        new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('controls'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('testingInformation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionPlanTitle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionPlanInstructions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('controlSources'),
                                    new \PHPStan\Type\Constant\ConstantStringType('controlMappingSources'),
                                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Core'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceDescription'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceSetUpOption'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceKeyword'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceFrequency'),
                                            new \PHPStan\Type\Constant\ConstantStringType('troubleshootingText'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('System_Controls_Mapping'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Procedural_Controls_Mapping'),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Cloudtrail'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Config'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Security_Hub'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_API_Call'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Common_Control'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Core_Control'),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('keywordInputType'),
                                                new \PHPStan\Type\Constant\ConstantStringType('keywordValue'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_FROM_LIST'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_FILE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('INPUT_TEXT'),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('WEEKLY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('END_OF_SUPPORT'),
                                    ]),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getAssessmentReportUrl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('preSignedUrl'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('hyperlinkName'),
                    new \PHPStan\Type\Constant\ConstantStringType('link'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getChangeLogs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('changeLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('objectType'),
                        new \PHPStan\Type\Constant\ConstantStringType('objectName'),
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ASSESSMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTROL_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTROL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELEGATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSESSMENT_REPORT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_METADATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVIEWED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPORT_EVIDENCE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getControl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('control'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('testingInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionPlanTitle'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionPlanInstructions'),
                    new \PHPStan\Type\Constant\ConstantStringType('controlSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('controlMappingSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                        new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                        new \PHPStan\Type\Constant\ConstantStringType('Core'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceSetUpOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceKeyword'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceFrequency'),
                            new \PHPStan\Type\Constant\ConstantStringType('troubleshootingText'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('System_Controls_Mapping'),
                                new \PHPStan\Type\Constant\ConstantStringType('Procedural_Controls_Mapping'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Cloudtrail'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Config'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Security_Hub'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_API_Call'),
                                new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('Common_Control'),
                                new \PHPStan\Type\Constant\ConstantStringType('Core_Control'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('keywordInputType'),
                                new \PHPStan\Type\Constant\ConstantStringType('keywordValue'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_FROM_LIST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_FILE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INPUT_TEXT'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                                new \PHPStan\Type\Constant\ConstantStringType('WEEKLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('END_OF_SUPPORT'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getDelegations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('delegations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlSetName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getEvidence(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('evidence'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('evidenceAwsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('time'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventName'),
                    new \PHPStan\Type\Constant\ConstantStringType('evidenceByType'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourcesIncluded'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamId'),
                    new \PHPStan\Type\Constant\ConstantStringType('complianceCheck'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsOrganization'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('evidenceFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentReportSelection'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('complianceCheck'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getEvidenceByEvidenceFolder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('evidence'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceAwsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('time'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventName'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceByType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourcesIncluded'),
                        new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamId'),
                        new \PHPStan\Type\Constant\ConstantStringType('complianceCheck'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsOrganization'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceFolderId'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentReportSelection'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('complianceCheck'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
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
    private function getEvidenceFileUploadUrl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('evidenceFileName'),
                new \PHPStan\Type\Constant\ConstantStringType('uploadUrl'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getEvidenceFolder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('evidenceFolder'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('date'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('controlSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('controlId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('author'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalEvidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentReportSelectionCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('controlName'),
                    new \PHPStan\Type\Constant\ConstantStringType('evidenceResourcesIncludedCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('evidenceByTypeConfigurationDataCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('evidenceByTypeManualCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('evidenceByTypeComplianceCheckCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('evidenceByTypeComplianceCheckIssuesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('evidenceByTypeUserActivityCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('evidenceAwsServiceSourceCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
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
    private function getEvidenceFoldersByAssessment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('evidenceFolders'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('date'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlId'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('author'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalEvidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentReportSelectionCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlName'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceResourcesIncludedCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceByTypeConfigurationDataCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceByTypeManualCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceByTypeComplianceCheckCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceByTypeComplianceCheckIssuesCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceByTypeUserActivityCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceAwsServiceSourceCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getEvidenceFoldersByAssessmentControl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('evidenceFolders'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('date'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlId'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('author'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalEvidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentReportSelectionCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlName'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceResourcesIncludedCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceByTypeConfigurationDataCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceByTypeManualCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceByTypeComplianceCheckCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceByTypeComplianceCheckIssuesCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceByTypeUserActivityCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceAwsServiceSourceCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getInsights(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('insights'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('activeAssessmentsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('noncompliantEvidenceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('compliantEvidenceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('inconclusiveEvidenceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentControlsCountByNoncompliantEvidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalAssessmentControlsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getInsightsByAssessment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('insights'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('noncompliantEvidenceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('compliantEvidenceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('inconclusiveEvidenceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentControlsCountByNoncompliantEvidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalAssessmentControlsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getOrganizationAdminAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('adminAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('organizationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getServicesInScope(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceMetadata'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('category'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('settings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('isAwsOrgEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('snsTopic'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultAssessmentReportsDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultProcessOwners'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('evidenceFinderEnablement'),
                    new \PHPStan\Type\Constant\ConstantStringType('deregistrationPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultExportDestination'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('destinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventDataStoreArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('enablementStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('backfillStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deleteResources'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('destinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listAssessmentControlInsightsByControlDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('controlInsightsByAssessment'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceInsights'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlSetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('noncompliantEvidenceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('compliantEvidenceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('inconclusiveEvidenceCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssessmentFrameworkShareRequests(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentFrameworkShareRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('frameworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('frameworkName'),
                        new \PHPStan\Type\Constant\ConstantStringType('frameworkDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('destinationAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('destinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('expirationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                        new \PHPStan\Type\Constant\ConstantStringType('comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('standardControlsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('customControlsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('complianceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPLICATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPIRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DECLINED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssessmentFrameworks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('frameworkMetadataList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('logo'),
                        new \PHPStan\Type\Constant\ConstantStringType('complianceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlSetsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                            new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssessmentReports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentReports'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('author'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssessments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('complianceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('roles'),
                        new \PHPStan\Type\Constant\ConstantStringType('delegations'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                                new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                                new \PHPStan\Type\Constant\ConstantStringType('controlSetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('comment'),
                                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listControlDomainInsights(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('controlDomainInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlsCountByNoncompliantEvidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalControlsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceInsights'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('noncompliantEvidenceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('compliantEvidenceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('inconclusiveEvidenceCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listControlDomainInsightsByAssessment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('controlDomainInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlsCountByNoncompliantEvidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalControlsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceInsights'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('noncompliantEvidenceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('compliantEvidenceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('inconclusiveEvidenceCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listControlInsightsByControlDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('controlInsightsMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceInsights'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('noncompliantEvidenceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('compliantEvidenceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('inconclusiveEvidenceCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listControls(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('controlMetadataList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKeywordsForDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('keywords'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listNotifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('notifications'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlSetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function registerAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACTIVATION'),
                ]),
            ]),
        ]);
    }
    private function registerOrganizationAdminAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('adminAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('organizationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startAssessmentFrameworkShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentFrameworkShareRequest'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('frameworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('frameworkName'),
                    new \PHPStan\Type\Constant\ConstantStringType('frameworkDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('expirationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('comment'),
                    new \PHPStan\Type\Constant\ConstantStringType('standardControlsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('customControlsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('complianceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DECLINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
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
    private function updateAssessment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('framework'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('complianceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentReportsDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('scope'),
                        new \PHPStan\Type\Constant\ConstantStringType('roles'),
                        new \PHPStan\Type\Constant\ConstantStringType('delegations'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('destinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('destination'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsAccounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsServices'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                                new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                                new \PHPStan\Type\Constant\ConstantStringType('controlSetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('comment'),
                                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlSets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('logo'),
                            new \PHPStan\Type\Constant\ConstantStringType('complianceType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('roles'),
                                new \PHPStan\Type\Constant\ConstantStringType('controls'),
                                new \PHPStan\Type\Constant\ConstantStringType('delegations'),
                                new \PHPStan\Type\Constant\ConstantStringType('systemEvidenceCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('manualEvidenceCount'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REVIEWED'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                                        new \PHPStan\Type\Constant\ConstantStringType('response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('comments'),
                                        new \PHPStan\Type\Constant\ConstantStringType('evidenceSources'),
                                        new \PHPStan\Type\Constant\ConstantStringType('evidenceCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('assessmentReportEvidenceCount'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('REVIEWED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DEFER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IGNORE'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('authorName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('commentBody'),
                                                new \PHPStan\Type\Constant\ConstantStringType('postedDate'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                                        new \PHPStan\Type\Constant\ConstantStringType('controlSetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('comment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                        ]),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function updateAssessmentControl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('control'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('response'),
                    new \PHPStan\Type\Constant\ConstantStringType('comments'),
                    new \PHPStan\Type\Constant\ConstantStringType('evidenceSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('evidenceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentReportEvidenceCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVIEWED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEFER'),
                        new \PHPStan\Type\Constant\ConstantStringType('IGNORE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authorName'),
                            new \PHPStan\Type\Constant\ConstantStringType('commentBody'),
                            new \PHPStan\Type\Constant\ConstantStringType('postedDate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function updateAssessmentControlSetStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('controlSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('roles'),
                    new \PHPStan\Type\Constant\ConstantStringType('controls'),
                    new \PHPStan\Type\Constant\ConstantStringType('delegations'),
                    new \PHPStan\Type\Constant\ConstantStringType('systemEvidenceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('manualEvidenceCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVIEWED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('response'),
                            new \PHPStan\Type\Constant\ConstantStringType('comments'),
                            new \PHPStan\Type\Constant\ConstantStringType('evidenceSources'),
                            new \PHPStan\Type\Constant\ConstantStringType('evidenceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('assessmentReportEvidenceCount'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVIEWED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('AUTOMATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFER'),
                                new \PHPStan\Type\Constant\ConstantStringType('IGNORE'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('authorName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('commentBody'),
                                    new \PHPStan\Type\Constant\ConstantStringType('postedDate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                            new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                            new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                            new \PHPStan\Type\Constant\ConstantStringType('controlSetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('comment'),
                            new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function updateAssessmentFramework(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('framework'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('complianceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('logo'),
                    new \PHPStan\Type\Constant\ConstantStringType('controlSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('controlSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                        new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('controls'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('testingInformation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionPlanTitle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionPlanInstructions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('controlSources'),
                                    new \PHPStan\Type\Constant\ConstantStringType('controlMappingSources'),
                                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Core'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceDescription'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceSetUpOption'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceKeyword'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceFrequency'),
                                            new \PHPStan\Type\Constant\ConstantStringType('troubleshootingText'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('System_Controls_Mapping'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Procedural_Controls_Mapping'),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Cloudtrail'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Config'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Security_Hub'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_API_Call'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Common_Control'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Core_Control'),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('keywordInputType'),
                                                new \PHPStan\Type\Constant\ConstantStringType('keywordValue'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_FROM_LIST'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_FILE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('INPUT_TEXT'),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('WEEKLY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('END_OF_SUPPORT'),
                                    ]),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function updateAssessmentFrameworkShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentFrameworkShareRequest'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('frameworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('frameworkName'),
                    new \PHPStan\Type\Constant\ConstantStringType('frameworkDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('expirationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('comment'),
                    new \PHPStan\Type\Constant\ConstantStringType('standardControlsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('customControlsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('complianceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DECLINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateAssessmentStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('framework'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('complianceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentReportsDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('scope'),
                        new \PHPStan\Type\Constant\ConstantStringType('roles'),
                        new \PHPStan\Type\Constant\ConstantStringType('delegations'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('destinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('destination'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsAccounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsServices'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                                new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                                new \PHPStan\Type\Constant\ConstantStringType('controlSetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('comment'),
                                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlSets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('logo'),
                            new \PHPStan\Type\Constant\ConstantStringType('complianceType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('roles'),
                                new \PHPStan\Type\Constant\ConstantStringType('controls'),
                                new \PHPStan\Type\Constant\ConstantStringType('delegations'),
                                new \PHPStan\Type\Constant\ConstantStringType('systemEvidenceCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('manualEvidenceCount'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REVIEWED'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                                        new \PHPStan\Type\Constant\ConstantStringType('response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('comments'),
                                        new \PHPStan\Type\Constant\ConstantStringType('evidenceSources'),
                                        new \PHPStan\Type\Constant\ConstantStringType('evidenceCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('assessmentReportEvidenceCount'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('REVIEWED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DEFER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IGNORE'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('authorName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('commentBody'),
                                                new \PHPStan\Type\Constant\ConstantStringType('postedDate'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                                        new \PHPStan\Type\Constant\ConstantStringType('controlSetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('comment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UNDER_REVIEW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                                        ]),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function updateControl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('control'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('testingInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionPlanTitle'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionPlanInstructions'),
                    new \PHPStan\Type\Constant\ConstantStringType('controlSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('controlMappingSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                        new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                        new \PHPStan\Type\Constant\ConstantStringType('Core'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceSetUpOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceKeyword'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceFrequency'),
                            new \PHPStan\Type\Constant\ConstantStringType('troubleshootingText'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('System_Controls_Mapping'),
                                new \PHPStan\Type\Constant\ConstantStringType('Procedural_Controls_Mapping'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Cloudtrail'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Config'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_Security_Hub'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_API_Call'),
                                new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('Common_Control'),
                                new \PHPStan\Type\Constant\ConstantStringType('Core_Control'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('keywordInputType'),
                                new \PHPStan\Type\Constant\ConstantStringType('keywordValue'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_FROM_LIST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_FILE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INPUT_TEXT'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                                new \PHPStan\Type\Constant\ConstantStringType('WEEKLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('END_OF_SUPPORT'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('settings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('isAwsOrgEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('snsTopic'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultAssessmentReportsDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultProcessOwners'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('evidenceFinderEnablement'),
                    new \PHPStan\Type\Constant\ConstantStringType('deregistrationPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultExportDestination'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('destinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleType'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PROCESS_OWNER'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_OWNER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventDataStoreArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('enablementStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('backfillStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deleteResources'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('destinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function validateAssessmentReportIntegrity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('signatureValid'),
                new \PHPStan\Type\Constant\ConstantStringType('signatureAlgorithm'),
                new \PHPStan\Type\Constant\ConstantStringType('signatureDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('signatureKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('validationErrors'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
}