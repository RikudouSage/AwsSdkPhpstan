<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class DetectiveClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Detective\DetectiveClient>
     */
    public function getClass(): string
    {
        return \Aws\Detective\DetectiveClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptInvitation',
            'batchGetGraphMemberDatasources',
            'batchGetMembershipDatasources',
            'createGraph',
            'createMembers',
            'deleteGraph',
            'deleteMembers',
            'describeOrganizationConfiguration',
            'disableOrganizationAdminAccount',
            'disassociateMembership',
            'enableOrganizationAdminAccount',
            'getInvestigation',
            'getMembers',
            'listDatasourcePackages',
            'listGraphs',
            'listIndicators',
            'listInvestigations',
            'listInvitations',
            'listMembers',
            'listOrganizationAdminAccounts',
            'listTagsForResource',
            'rejectInvitation',
            'startInvestigation',
            'startMonitoringMember',
            'tagResource',
            'untagResource',
            'updateDatasourcePackages',
            'updateInvestigationState',
            'updateOrganizationConfiguration',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptInvitation' => $this->acceptInvitation(),
            'batchGetGraphMemberDatasources' => $this->batchGetGraphMemberDatasources(),
            'batchGetMembershipDatasources' => $this->batchGetMembershipDatasources(),
            'createGraph' => $this->createGraph(),
            'createMembers' => $this->createMembers(),
            'deleteGraph' => $this->deleteGraph(),
            'deleteMembers' => $this->deleteMembers(),
            'describeOrganizationConfiguration' => $this->describeOrganizationConfiguration(),
            'disableOrganizationAdminAccount' => $this->disableOrganizationAdminAccount(),
            'disassociateMembership' => $this->disassociateMembership(),
            'enableOrganizationAdminAccount' => $this->enableOrganizationAdminAccount(),
            'getInvestigation' => $this->getInvestigation(),
            'getMembers' => $this->getMembers(),
            'listDatasourcePackages' => $this->listDatasourcePackages(),
            'listGraphs' => $this->listGraphs(),
            'listIndicators' => $this->listIndicators(),
            'listInvestigations' => $this->listInvestigations(),
            'listInvitations' => $this->listInvitations(),
            'listMembers' => $this->listMembers(),
            'listOrganizationAdminAccounts' => $this->listOrganizationAdminAccounts(),
            'listTagsForResource' => $this->listTagsForResource(),
            'rejectInvitation' => $this->rejectInvitation(),
            'startInvestigation' => $this->startInvestigation(),
            'startMonitoringMember' => $this->startMonitoringMember(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDatasourcePackages' => $this->updateDatasourcePackages(),
            'updateInvestigationState' => $this->updateInvestigationState(),
            'updateOrganizationConfiguration' => $this->updateOrganizationConfiguration(),
        };
    }
    private function acceptInvitation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function batchGetGraphMemberDatasources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MemberDatasources'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GraphArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasourcePackageIngestHistory'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DETECTIVE_CORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASFF_SECURITYHUB_FINDING'),
                    ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]))),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetMembershipDatasources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MembershipDatasources'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedGraphs'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GraphArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasourcePackageIngestHistory'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DETECTIVE_CORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASFF_SECURITYHUB_FINDING'),
                    ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]))),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GraphArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function createGraph(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GraphArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Members'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('GraphArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdministratorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentOfGraphUtilization'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentOfGraphUtilizationUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageByDatasourcePackage'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasourcePackageIngestStates'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERIFICATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERIFICATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED_BUT_DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VOLUME_TOO_HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOLUME_UNKNOWN'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DETECTIVE_CORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASFF_SECURITYHUB_FINDING'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageUpdateTime'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DETECTIVE_CORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASFF_SECURITYHUB_FINDING'),
                    ]), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function deleteGraph(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountIds'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeOrganizationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoEnable'),
            ], [
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function disableOrganizationAdminAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function enableOrganizationAdminAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getInvestigation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GraphArn'),
                new \PHPStan\Type\Constant\ConstantStringType('InvestigationId'),
                new \PHPStan\Type\Constant\ConstantStringType('EntityArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EntityType'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ScopeStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ScopeEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAM_USER'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                    new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                    new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                ]),
            ]),
        ]);
    }
    private function getMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MemberDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('GraphArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdministratorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentOfGraphUtilization'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentOfGraphUtilizationUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageByDatasourcePackage'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasourcePackageIngestStates'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERIFICATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERIFICATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED_BUT_DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VOLUME_TOO_HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOLUME_UNKNOWN'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DETECTIVE_CORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASFF_SECURITYHUB_FINDING'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageUpdateTime'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DETECTIVE_CORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASFF_SECURITYHUB_FINDING'),
                    ]), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listDatasourcePackages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasourcePackages'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DETECTIVE_CORE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                    new \PHPStan\Type\Constant\ConstantStringType('ASFF_SECURITYHUB_FINDING'),
                ]), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DatasourcePackageIngestState'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastIngestStateChange'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGraphs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GraphList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIndicators(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GraphArn'),
                new \PHPStan\Type\Constant\ConstantStringType('InvestigationId'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Indicators'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IndicatorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IndicatorDetail'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TTP_OBSERVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPOSSIBLE_TRAVEL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLAGGED_IP_ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NEW_GEOLOCATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('NEW_ASO'),
                        new \PHPStan\Type\Constant\ConstantStringType('NEW_USER_AGENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RELATED_FINDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RELATED_FINDING_GROUP'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TTPsObservedDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImpossibleTravelDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('FlaggedIpAddressDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewGeolocationDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewAsoDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewUserAgentDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelatedFindingDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelatedFindingGroupDetail'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tactic'),
                            new \PHPStan\Type\Constant\ConstantStringType('Technique'),
                            new \PHPStan\Type\Constant\ConstantStringType('Procedure'),
                            new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('APIName'),
                            new \PHPStan\Type\Constant\ConstantStringType('APISuccessCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('APIFailureCount'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartingIpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndingIpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartingLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndingLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('HourlyTimeDelta'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_THREAT_INTELLIGENCE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Location'),
                            new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('IsNewForEntireAccount'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Aso'),
                            new \PHPStan\Type\Constant\ConstantStringType('IsNewForEntireAccount'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserAgent'),
                            new \PHPStan\Type\Constant\ConstantStringType('IsNewForEntireAccount'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listInvestigations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InvestigationDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InvestigationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAM_USER'),
                    ]),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('GraphArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdministratorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentOfGraphUtilization'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentOfGraphUtilizationUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageByDatasourcePackage'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasourcePackageIngestStates'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERIFICATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERIFICATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED_BUT_DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VOLUME_TOO_HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOLUME_UNKNOWN'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DETECTIVE_CORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASFF_SECURITYHUB_FINDING'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageUpdateTime'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DETECTIVE_CORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASFF_SECURITYHUB_FINDING'),
                    ]), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MemberDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('GraphArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdministratorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentOfGraphUtilization'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentOfGraphUtilizationUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageByDatasourcePackage'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasourcePackageIngestStates'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERIFICATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERIFICATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED_BUT_DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VOLUME_TOO_HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOLUME_UNKNOWN'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DETECTIVE_CORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASFF_SECURITYHUB_FINDING'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageUpdateTime'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DETECTIVE_CORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASFF_SECURITYHUB_FINDING'),
                    ]), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOrganizationAdminAccounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Administrators'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GraphArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DelegationTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function rejectInvitation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startInvestigation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InvestigationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startMonitoringMember(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
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
    private function updateDatasourcePackages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateInvestigationState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateOrganizationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}