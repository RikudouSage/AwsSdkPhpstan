<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MPAClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MPA\MPAClient>
     */
    public function getClass(): string
    {
        return \Aws\MPA\MPAClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelSession',
            'createApprovalTeam',
            'createIdentitySource',
            'deleteIdentitySource',
            'deleteInactiveApprovalTeamVersion',
            'getApprovalTeam',
            'getIdentitySource',
            'getPolicyVersion',
            'getResourcePolicy',
            'getSession',
            'listApprovalTeams',
            'listIdentitySources',
            'listPolicies',
            'listPolicyVersions',
            'listResourcePolicies',
            'listSessions',
            'listTagsForResource',
            'startActiveApprovalTeamDeletion',
            'tagResource',
            'untagResource',
            'updateApprovalTeam',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelSession' => $this->cancelSession(),
            'createApprovalTeam' => $this->createApprovalTeam(),
            'createIdentitySource' => $this->createIdentitySource(),
            'deleteIdentitySource' => $this->deleteIdentitySource(),
            'deleteInactiveApprovalTeamVersion' => $this->deleteInactiveApprovalTeamVersion(),
            'getApprovalTeam' => $this->getApprovalTeam(),
            'getIdentitySource' => $this->getIdentitySource(),
            'getPolicyVersion' => $this->getPolicyVersion(),
            'getResourcePolicy' => $this->getResourcePolicy(),
            'getSession' => $this->getSession(),
            'listApprovalTeams' => $this->listApprovalTeams(),
            'listIdentitySources' => $this->listIdentitySources(),
            'listPolicies' => $this->listPolicies(),
            'listPolicyVersions' => $this->listPolicyVersions(),
            'listResourcePolicies' => $this->listResourcePolicies(),
            'listSessions' => $this->listSessions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startActiveApprovalTeamDeletion' => $this->startActiveApprovalTeamDeletion(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateApprovalTeam' => $this->updateApprovalTeam(),
        };
    }
    private function cancelSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createApprovalTeam(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createIdentitySource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentitySourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentitySourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
            ], [
                new \PHPStan\Type\Constant\ConstantStringType('IAM_IDENTITY_CENTER'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteIdentitySource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteInactiveApprovalTeamVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getApprovalTeam(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ApprovalStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberOfApprovers'),
                new \PHPStan\Type\Constant\ConstantStringType('Approvers'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateSessionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingUpdate'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MofN'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinApprovalsRequired'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApproverId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResponseTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryIdentityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryIdentitySourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryIdentityStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACTIVATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_VALIDATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_ACTIVATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_PENDING_APPROVAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_PENDING_ACTIVATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_APPROVAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_ACTIVATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_VALIDATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING_APPROVAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED_APPROVAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED_VALIDATION'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovalStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfApprovers'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Approvers'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateInitiationTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MofN'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MinApprovalsRequired'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACTIVATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_ACTIVATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_PENDING_APPROVAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_PENDING_ACTIVATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_APPROVAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_ACTIVATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING_APPROVAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED_APPROVAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED_VALIDATION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApproverId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResponseTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryIdentityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryIdentitySourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryIdentityStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getIdentitySource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentitySourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentitySourceParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentitySourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
            ], [
                new \PHPStan\Type\Constant\ConstantStringType('IAM_IDENTITY_CENTER'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IamIdentityCenter'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApprovalPortalUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IDC_INSTANCE_NOT_FOUND'),
                    new \PHPStan\Type\Constant\ConstantStringType('IDC_INSTANCE_NOT_VALID'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPolicyVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Document'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_RAM'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ATTACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyDocument'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_RAM'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SessionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ApprovalTeamArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ApprovalTeamName'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtectedResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ApprovalStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberOfApprovers'),
                new \PHPStan\Type\Constant\ConstantStringType('InitiationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletionTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('ActionName'),
                new \PHPStan\Type\Constant\ConstantStringType('RequesterServicePrincipal'),
                new \PHPStan\Type\Constant\ConstantStringType('RequesterPrincipalArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RequesterAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('RequesterRegion'),
                new \PHPStan\Type\Constant\ConstantStringType('RequesterComment'),
                new \PHPStan\Type\Constant\ConstantStringType('ActionCompletionStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproverResponses'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MofN'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinApprovalsRequired'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_CHANGED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EXECUTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('AUTO_COMPLETION_UPON_APPROVAL'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApproverId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentitySourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Response'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResponseTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO_RESPONSE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function listApprovalTeams(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ApprovalTeams'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovalStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfApprovers'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MofN'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MinApprovalsRequired'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACTIVATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_ACTIVATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_PENDING_APPROVAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_PENDING_ACTIVATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_APPROVAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_ACTIVATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING_APPROVAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED_APPROVAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED_VALIDATION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listIdentitySources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentitySources'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IdentitySourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentitySourceParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentitySourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('IAM_IDENTITY_CENTER'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IamIdentityCenter'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApprovalPortalUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IDC_INSTANCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('IDC_INSTANCE_NOT_VALID'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Policies'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_RAM'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listPolicyVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyVersions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_RAM'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ATTACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function listResourcePolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourcePolicies'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_RAM'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listSessions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Sessions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SessionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovalTeamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovalTeamArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitiationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectedResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequesterServicePrincipal'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequesterPrincipalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequesterRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequesterAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionCompletionStrategy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_CHANGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTO_COMPLETION_UPON_APPROVAL'),
                ])),
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
    private function startActiveApprovalTeamDeletion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeletionCompletionTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionStartTime'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function updateApprovalTeam(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}