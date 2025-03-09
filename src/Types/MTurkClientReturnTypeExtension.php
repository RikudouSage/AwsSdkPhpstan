<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MTurkClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MTurk\MTurkClient>
     */
    public function getClass(): string
    {
        return \Aws\MTurk\MTurkClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptQualificationRequest',
            'approveAssignment',
            'associateQualificationWithWorker',
            'createAdditionalAssignmentsForHIT',
            'createHIT',
            'createHITType',
            'createHITWithHITType',
            'createQualificationType',
            'createWorkerBlock',
            'deleteHIT',
            'deleteQualificationType',
            'deleteWorkerBlock',
            'disassociateQualificationFromWorker',
            'getAccountBalance',
            'getAssignment',
            'getFileUploadURL',
            'getHIT',
            'getQualificationScore',
            'getQualificationType',
            'listAssignmentsForHIT',
            'listBonusPayments',
            'listHITs',
            'listHITsForQualificationType',
            'listQualificationRequests',
            'listQualificationTypes',
            'listReviewPolicyResultsForHIT',
            'listReviewableHITs',
            'listWorkerBlocks',
            'listWorkersWithQualificationType',
            'notifyWorkers',
            'rejectAssignment',
            'rejectQualificationRequest',
            'sendBonus',
            'sendTestEventNotification',
            'updateExpirationForHIT',
            'updateHITReviewStatus',
            'updateHITTypeOfHIT',
            'updateNotificationSettings',
            'updateQualificationType',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptQualificationRequest' => $this->acceptQualificationRequest(),
            'approveAssignment' => $this->approveAssignment(),
            'associateQualificationWithWorker' => $this->associateQualificationWithWorker(),
            'createAdditionalAssignmentsForHIT' => $this->createAdditionalAssignmentsForHIT(),
            'createHIT' => $this->createHIT(),
            'createHITType' => $this->createHITType(),
            'createHITWithHITType' => $this->createHITWithHITType(),
            'createQualificationType' => $this->createQualificationType(),
            'createWorkerBlock' => $this->createWorkerBlock(),
            'deleteHIT' => $this->deleteHIT(),
            'deleteQualificationType' => $this->deleteQualificationType(),
            'deleteWorkerBlock' => $this->deleteWorkerBlock(),
            'disassociateQualificationFromWorker' => $this->disassociateQualificationFromWorker(),
            'getAccountBalance' => $this->getAccountBalance(),
            'getAssignment' => $this->getAssignment(),
            'getFileUploadURL' => $this->getFileUploadURL(),
            'getHIT' => $this->getHIT(),
            'getQualificationScore' => $this->getQualificationScore(),
            'getQualificationType' => $this->getQualificationType(),
            'listAssignmentsForHIT' => $this->listAssignmentsForHIT(),
            'listBonusPayments' => $this->listBonusPayments(),
            'listHITs' => $this->listHITs(),
            'listHITsForQualificationType' => $this->listHITsForQualificationType(),
            'listQualificationRequests' => $this->listQualificationRequests(),
            'listQualificationTypes' => $this->listQualificationTypes(),
            'listReviewPolicyResultsForHIT' => $this->listReviewPolicyResultsForHIT(),
            'listReviewableHITs' => $this->listReviewableHITs(),
            'listWorkerBlocks' => $this->listWorkerBlocks(),
            'listWorkersWithQualificationType' => $this->listWorkersWithQualificationType(),
            'notifyWorkers' => $this->notifyWorkers(),
            'rejectAssignment' => $this->rejectAssignment(),
            'rejectQualificationRequest' => $this->rejectQualificationRequest(),
            'sendBonus' => $this->sendBonus(),
            'sendTestEventNotification' => $this->sendTestEventNotification(),
            'updateExpirationForHIT' => $this->updateExpirationForHIT(),
            'updateHITReviewStatus' => $this->updateHITReviewStatus(),
            'updateHITTypeOfHIT' => $this->updateHITTypeOfHIT(),
            'updateNotificationSettings' => $this->updateNotificationSettings(),
            'updateQualificationType' => $this->updateQualificationType(),
        };
    }
    private function acceptQualificationRequest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function approveAssignment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateQualificationWithWorker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createAdditionalAssignmentsForHIT(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createHIT(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HIT'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HITId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITTypeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITLayoutId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Question'),
                    new \PHPStan\Type\Constant\ConstantStringType('Keywords'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAssignments'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reward'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoApprovalDelayInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssignmentDurationInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequesterAnnotation'),
                    new \PHPStan\Type\Constant\ConstantStringType('QualificationRequirements'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITReviewStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsPending'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsAvailable'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsCompleted'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Assignable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unassignable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reviewable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reviewing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disposed'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparator'),
                            new \PHPStan\Type\Constant\ConstantStringType('IntegerValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocaleValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequiredToPreview'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActionsGuarded'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('EqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('Exists'),
                                new \PHPStan\Type\Constant\ConstantStringType('DoesNotExist'),
                                new \PHPStan\Type\Constant\ConstantStringType('In'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotIn'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Subdivision'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Accept'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreviewAndAccept'),
                                new \PHPStan\Type\Constant\ConstantStringType('DiscoverPreviewAndAccept'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotReviewed'),
                        new \PHPStan\Type\Constant\ConstantStringType('MarkedForReview'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReviewedAppropriate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReviewedInappropriate'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createHITType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HITTypeId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createHITWithHITType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HIT'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HITId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITTypeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITLayoutId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Question'),
                    new \PHPStan\Type\Constant\ConstantStringType('Keywords'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAssignments'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reward'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoApprovalDelayInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssignmentDurationInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequesterAnnotation'),
                    new \PHPStan\Type\Constant\ConstantStringType('QualificationRequirements'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITReviewStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsPending'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsAvailable'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsCompleted'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Assignable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unassignable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reviewable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reviewing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disposed'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparator'),
                            new \PHPStan\Type\Constant\ConstantStringType('IntegerValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocaleValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequiredToPreview'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActionsGuarded'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('EqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('Exists'),
                                new \PHPStan\Type\Constant\ConstantStringType('DoesNotExist'),
                                new \PHPStan\Type\Constant\ConstantStringType('In'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotIn'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Subdivision'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Accept'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreviewAndAccept'),
                                new \PHPStan\Type\Constant\ConstantStringType('DiscoverPreviewAndAccept'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotReviewed'),
                        new \PHPStan\Type\Constant\ConstantStringType('MarkedForReview'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReviewedAppropriate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReviewedInappropriate'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createQualificationType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QualificationType'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Keywords'),
                    new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Test'),
                    new \PHPStan\Type\Constant\ConstantStringType('TestDurationInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnswerKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetryDelayInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsRequestable'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoGranted'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoGrantedValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createWorkerBlock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteHIT(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteQualificationType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteWorkerBlock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateQualificationFromWorker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAccountBalance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AvailableBalance'),
                new \PHPStan\Type\Constant\ConstantStringType('OnHoldBalance'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAssignment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Assignment'),
                new \PHPStan\Type\Constant\ConstantStringType('HIT'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssignmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssignmentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoApprovalTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AcceptTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovalTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('RejectionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deadline'),
                    new \PHPStan\Type\Constant\ConstantStringType('Answer'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequesterFeedback'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Submitted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Approved'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HITId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITTypeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITLayoutId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Question'),
                    new \PHPStan\Type\Constant\ConstantStringType('Keywords'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAssignments'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reward'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoApprovalDelayInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssignmentDurationInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequesterAnnotation'),
                    new \PHPStan\Type\Constant\ConstantStringType('QualificationRequirements'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITReviewStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsPending'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsAvailable'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsCompleted'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Assignable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unassignable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reviewable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reviewing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disposed'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparator'),
                            new \PHPStan\Type\Constant\ConstantStringType('IntegerValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocaleValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequiredToPreview'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActionsGuarded'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('EqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('Exists'),
                                new \PHPStan\Type\Constant\ConstantStringType('DoesNotExist'),
                                new \PHPStan\Type\Constant\ConstantStringType('In'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotIn'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Subdivision'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Accept'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreviewAndAccept'),
                                new \PHPStan\Type\Constant\ConstantStringType('DiscoverPreviewAndAccept'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotReviewed'),
                        new \PHPStan\Type\Constant\ConstantStringType('MarkedForReview'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReviewedAppropriate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReviewedInappropriate'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getFileUploadURL(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileUploadURL'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getHIT(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HIT'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HITId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITTypeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITLayoutId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Question'),
                    new \PHPStan\Type\Constant\ConstantStringType('Keywords'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAssignments'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reward'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoApprovalDelayInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssignmentDurationInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequesterAnnotation'),
                    new \PHPStan\Type\Constant\ConstantStringType('QualificationRequirements'),
                    new \PHPStan\Type\Constant\ConstantStringType('HITReviewStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsPending'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsAvailable'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsCompleted'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Assignable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unassignable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reviewable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reviewing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disposed'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparator'),
                            new \PHPStan\Type\Constant\ConstantStringType('IntegerValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocaleValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequiredToPreview'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActionsGuarded'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('EqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('Exists'),
                                new \PHPStan\Type\Constant\ConstantStringType('DoesNotExist'),
                                new \PHPStan\Type\Constant\ConstantStringType('In'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotIn'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Subdivision'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Accept'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreviewAndAccept'),
                                new \PHPStan\Type\Constant\ConstantStringType('DiscoverPreviewAndAccept'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotReviewed'),
                        new \PHPStan\Type\Constant\ConstantStringType('MarkedForReview'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReviewedAppropriate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReviewedInappropriate'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getQualificationScore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Qualification'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegerValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocaleValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subdivision'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Granted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Revoked'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getQualificationType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QualificationType'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Keywords'),
                    new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Test'),
                    new \PHPStan\Type\Constant\ConstantStringType('TestDurationInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnswerKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetryDelayInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsRequestable'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoGranted'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoGrantedValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function listAssignmentsForHIT(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('NumResults'),
                new \PHPStan\Type\Constant\ConstantStringType('Assignments'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssignmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HITId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssignmentStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoApprovalTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('AcceptTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApprovalTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('RejectionTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deadline'),
                        new \PHPStan\Type\Constant\ConstantStringType('Answer'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequesterFeedback'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Submitted'),
                            new \PHPStan\Type\Constant\ConstantStringType('Approved'),
                            new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listBonusPayments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NumResults'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('BonusPayments'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WorkerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('BonusAmount'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssignmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('GrantTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listHITs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('NumResults'),
                new \PHPStan\Type\Constant\ConstantStringType('HITs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HITId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HITTypeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HITGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HITLayoutId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Question'),
                        new \PHPStan\Type\Constant\ConstantStringType('Keywords'),
                        new \PHPStan\Type\Constant\ConstantStringType('HITStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxAssignments'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reward'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoApprovalDelayInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssignmentDurationInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequesterAnnotation'),
                        new \PHPStan\Type\Constant\ConstantStringType('QualificationRequirements'),
                        new \PHPStan\Type\Constant\ConstantStringType('HITReviewStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsPending'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsCompleted'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Assignable'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unassignable'),
                            new \PHPStan\Type\Constant\ConstantStringType('Reviewable'),
                            new \PHPStan\Type\Constant\ConstantStringType('Reviewing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disposed'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Comparator'),
                                new \PHPStan\Type\Constant\ConstantStringType('IntegerValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocaleValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequiredToPreview'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActionsGuarded'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EqualTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NotEqualTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Exists'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DoesNotExist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('In'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NotIn'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Subdivision'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Accept'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PreviewAndAccept'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DiscoverPreviewAndAccept'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NotReviewed'),
                            new \PHPStan\Type\Constant\ConstantStringType('MarkedForReview'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReviewedAppropriate'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReviewedInappropriate'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listHITsForQualificationType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('NumResults'),
                new \PHPStan\Type\Constant\ConstantStringType('HITs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HITId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HITTypeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HITGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HITLayoutId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Question'),
                        new \PHPStan\Type\Constant\ConstantStringType('Keywords'),
                        new \PHPStan\Type\Constant\ConstantStringType('HITStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxAssignments'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reward'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoApprovalDelayInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssignmentDurationInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequesterAnnotation'),
                        new \PHPStan\Type\Constant\ConstantStringType('QualificationRequirements'),
                        new \PHPStan\Type\Constant\ConstantStringType('HITReviewStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsPending'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsCompleted'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Assignable'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unassignable'),
                            new \PHPStan\Type\Constant\ConstantStringType('Reviewable'),
                            new \PHPStan\Type\Constant\ConstantStringType('Reviewing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disposed'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Comparator'),
                                new \PHPStan\Type\Constant\ConstantStringType('IntegerValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocaleValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequiredToPreview'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActionsGuarded'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EqualTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NotEqualTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Exists'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DoesNotExist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('In'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NotIn'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Subdivision'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Accept'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PreviewAndAccept'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DiscoverPreviewAndAccept'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NotReviewed'),
                            new \PHPStan\Type\Constant\ConstantStringType('MarkedForReview'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReviewedAppropriate'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReviewedInappropriate'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listQualificationRequests(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NumResults'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('QualificationRequests'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('QualificationRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Test'),
                        new \PHPStan\Type\Constant\ConstantStringType('Answer'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listQualificationTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NumResults'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('QualificationTypes'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Keywords'),
                        new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Test'),
                        new \PHPStan\Type\Constant\ConstantStringType('TestDurationInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnswerKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetryDelayInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsRequestable'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoGranted'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoGrantedValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listReviewPolicyResultsForHIT(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HITId'),
                new \PHPStan\Type\Constant\ConstantStringType('AssignmentReviewPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('HITReviewPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('AssignmentReviewReport'),
                new \PHPStan\Type\Constant\ConstantStringType('HITReviewReport'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                            new \PHPStan\Type\Constant\ConstantStringType('MapEntries'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                            new \PHPStan\Type\Constant\ConstantStringType('MapEntries'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewResults'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewActions'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubjectId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubjectType'),
                            new \PHPStan\Type\Constant\ConstantStringType('QuestionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
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
                            new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('CompleteTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('Result'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Intended'),
                                new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewResults'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewActions'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubjectId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubjectType'),
                            new \PHPStan\Type\Constant\ConstantStringType('QuestionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
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
                            new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('CompleteTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('Result'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Intended'),
                                new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listReviewableHITs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('NumResults'),
                new \PHPStan\Type\Constant\ConstantStringType('HITs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HITId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HITTypeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HITGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HITLayoutId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Question'),
                        new \PHPStan\Type\Constant\ConstantStringType('Keywords'),
                        new \PHPStan\Type\Constant\ConstantStringType('HITStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxAssignments'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reward'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoApprovalDelayInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssignmentDurationInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequesterAnnotation'),
                        new \PHPStan\Type\Constant\ConstantStringType('QualificationRequirements'),
                        new \PHPStan\Type\Constant\ConstantStringType('HITReviewStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsPending'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssignmentsCompleted'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Assignable'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unassignable'),
                            new \PHPStan\Type\Constant\ConstantStringType('Reviewable'),
                            new \PHPStan\Type\Constant\ConstantStringType('Reviewing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disposed'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Comparator'),
                                new \PHPStan\Type\Constant\ConstantStringType('IntegerValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocaleValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequiredToPreview'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActionsGuarded'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EqualTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NotEqualTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Exists'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DoesNotExist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('In'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NotIn'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Subdivision'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Accept'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PreviewAndAccept'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DiscoverPreviewAndAccept'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NotReviewed'),
                            new \PHPStan\Type\Constant\ConstantStringType('MarkedForReview'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReviewedAppropriate'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReviewedInappropriate'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listWorkerBlocks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('NumResults'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkerBlocks'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WorkerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listWorkersWithQualificationType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('NumResults'),
                new \PHPStan\Type\Constant\ConstantStringType('Qualifications'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('GrantTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('IntegerValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocaleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Country'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subdivision'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Granted'),
                            new \PHPStan\Type\Constant\ConstantStringType('Revoked'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function notifyWorkers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotifyWorkersFailureStatuses'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotifyWorkersFailureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotifyWorkersFailureMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkerId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SoftFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('HardFailure'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function rejectAssignment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function rejectQualificationRequest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function sendBonus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function sendTestEventNotification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateExpirationForHIT(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateHITReviewStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateHITTypeOfHIT(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateNotificationSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateQualificationType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QualificationType'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Keywords'),
                    new \PHPStan\Type\Constant\ConstantStringType('QualificationTypeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Test'),
                    new \PHPStan\Type\Constant\ConstantStringType('TestDurationInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnswerKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetryDelayInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsRequestable'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoGranted'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoGrantedValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
}