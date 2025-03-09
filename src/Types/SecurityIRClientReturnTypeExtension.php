<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SecurityIRClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\SecurityIR\SecurityIRClient>
     */
    public function getClass(): string
    {
        return \Aws\SecurityIR\SecurityIRClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchGetMemberAccountDetails',
            'cancelMembership',
            'closeCase',
            'createCase',
            'createCaseComment',
            'createMembership',
            'getCase',
            'getCaseAttachmentDownloadUrl',
            'getCaseAttachmentUploadUrl',
            'getMembership',
            'listCaseEdits',
            'listCases',
            'listComments',
            'listMemberships',
            'listTagsForResource',
            'tagResource',
            'untagResource',
            'updateCase',
            'updateCaseComment',
            'updateCaseStatus',
            'updateMembership',
            'updateResolverType',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchGetMemberAccountDetails' => $this->batchGetMemberAccountDetails(),
            'cancelMembership' => $this->cancelMembership(),
            'closeCase' => $this->closeCase(),
            'createCase' => $this->createCase(),
            'createCaseComment' => $this->createCaseComment(),
            'createMembership' => $this->createMembership(),
            'getCase' => $this->getCase(),
            'getCaseAttachmentDownloadUrl' => $this->getCaseAttachmentDownloadUrl(),
            'getCaseAttachmentUploadUrl' => $this->getCaseAttachmentUploadUrl(),
            'getMembership' => $this->getMembership(),
            'listCaseEdits' => $this->listCaseEdits(),
            'listCases' => $this->listCases(),
            'listComments' => $this->listComments(),
            'listMemberships' => $this->listMemberships(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateCase' => $this->updateCase(),
            'updateCaseComment' => $this->updateCaseComment(),
            'updateCaseStatus' => $this->updateCaseStatus(),
            'updateMembership' => $this->updateMembership(),
            'updateResolverType' => $this->updateResolverType(),
        };
    }
    private function batchGetMemberAccountDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('relationshipStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('relationshipType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Associated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disassociated'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function cancelMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function closeCase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('caseStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('closedDate'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Submitted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Acknowledged'),
                    new \PHPStan\Type\Constant\ConstantStringType('Detection and Analysis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Containment, Eradication and Recovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('Post-incident Activities'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ready to Close'),
                    new \PHPStan\Type\Constant\ConstantStringType('Closed'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createCase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('caseId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCaseComment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commentId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('title'),
                new \PHPStan\Type\Constant\ConstantStringType('caseArn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('caseStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('engagementType'),
                new \PHPStan\Type\Constant\ConstantStringType('reportedIncidentStartDate'),
                new \PHPStan\Type\Constant\ConstantStringType('actualIncidentStartDate'),
                new \PHPStan\Type\Constant\ConstantStringType('impactedAwsRegions'),
                new \PHPStan\Type\Constant\ConstantStringType('threatActorIpAddresses'),
                new \PHPStan\Type\Constant\ConstantStringType('pendingAction'),
                new \PHPStan\Type\Constant\ConstantStringType('impactedAccounts'),
                new \PHPStan\Type\Constant\ConstantStringType('watchers'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('closureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('resolverType'),
                new \PHPStan\Type\Constant\ConstantStringType('impactedServices'),
                new \PHPStan\Type\Constant\ConstantStringType('caseAttachments'),
                new \PHPStan\Type\Constant\ConstantStringType('closedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Submitted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Acknowledged'),
                    new \PHPStan\Type\Constant\ConstantStringType('Detection and Analysis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Containment, Eradication and Recovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('Post-incident Activities'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ready to Close'),
                    new \PHPStan\Type\Constant\ConstantStringType('Closed'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Security Incident'),
                    new \PHPStan\Type\Constant\ConstantStringType('Investigation'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('af-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-south-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-5'),
                        new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ca-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('cn-north-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('cn-northwest-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-central-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-north-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-south-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-3'),
                        new \PHPStan\Type\Constant\ConstantStringType('il-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('me-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('me-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-east-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('userAgent'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Customer'),
                    new \PHPStan\Type\Constant\ConstantStringType('None'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('email'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobTitle'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Investigation Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Not Resolved'),
                    new \PHPStan\Type\Constant\ConstantStringType('False Positive'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duplicate'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                    new \PHPStan\Type\Constant\ConstantStringType('Self'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('fileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachmentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('creator'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Verified'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getCaseAttachmentDownloadUrl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('attachmentPresignedUrl'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCaseAttachmentUploadUrl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('attachmentPresignedUrl'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('membershipName'),
                new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                new \PHPStan\Type\Constant\ConstantStringType('membershipStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('membershipActivationTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('membershipDeactivationTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('customerType'),
                new \PHPStan\Type\Constant\ConstantStringType('numberOfAccountsCovered'),
                new \PHPStan\Type\Constant\ConstantStringType('incidentResponseTeam'),
                new \PHPStan\Type\Constant\ConstantStringType('optInFeatures'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('af-south-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-east-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-3'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-south-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-south-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-3'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-4'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-5'),
                    new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ca-west-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('cn-north-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('cn-northwest-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-central-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-north-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-south-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-south-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-west-3'),
                    new \PHPStan\Type\Constant\ConstantStringType('il-central-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('me-central-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('me-south-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('us-east-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Standalone'),
                    new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobTitle'),
                    new \PHPStan\Type\Constant\ConstantStringType('email'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('featureName'),
                    new \PHPStan\Type\Constant\ConstantStringType('isEnabled'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('Triage'),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function listCaseEdits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('total'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('eventTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('principal'),
                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function listCases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('total'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('caseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('caseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('engagementType'),
                    new \PHPStan\Type\Constant\ConstantStringType('caseStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('closedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolverType'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingAction'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Security Incident'),
                        new \PHPStan\Type\Constant\ConstantStringType('Investigation'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Submitted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Acknowledged'),
                        new \PHPStan\Type\Constant\ConstantStringType('Detection and Analysis'),
                        new \PHPStan\Type\Constant\ConstantStringType('Containment, Eradication and Recovery'),
                        new \PHPStan\Type\Constant\ConstantStringType('Post-incident Activities'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ready to Close'),
                        new \PHPStan\Type\Constant\ConstantStringType('Closed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('Self'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Customer'),
                        new \PHPStan\Type\Constant\ConstantStringType('None'),
                    ]),
                ])),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function listComments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('total'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('commentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creator'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('body'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function listMemberships(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('af-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-south-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-5'),
                        new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ca-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('cn-north-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('cn-northwest-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-central-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-north-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-south-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-3'),
                        new \PHPStan\Type\Constant\ConstantStringType('il-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('me-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('me-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-east-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                    ]),
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
    private function updateCase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateCaseComment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commentId'),
                new \PHPStan\Type\Constant\ConstantStringType('body'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateCaseStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('caseStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Submitted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Detection and Analysis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Containment, Eradication and Recovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('Post-incident Activities'),
                ]),
            ]),
        ]);
    }
    private function updateMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateResolverType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('caseId'),
                new \PHPStan\Type\Constant\ConstantStringType('caseStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('resolverType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Submitted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Acknowledged'),
                    new \PHPStan\Type\Constant\ConstantStringType('Detection and Analysis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Containment, Eradication and Recovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('Post-incident Activities'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ready to Close'),
                    new \PHPStan\Type\Constant\ConstantStringType('Closed'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                    new \PHPStan\Type\Constant\ConstantStringType('Self'),
                ]),
            ]),
        ]);
    }
}