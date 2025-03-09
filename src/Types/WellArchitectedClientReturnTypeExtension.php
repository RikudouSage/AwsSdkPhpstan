<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class WellArchitectedClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\WellArchitected\WellArchitectedClient>
     */
    public function getClass(): string
    {
        return \Aws\WellArchitected\WellArchitectedClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateLenses',
            'associateProfiles',
            'createLensShare',
            'createLensVersion',
            'createMilestone',
            'createProfile',
            'createProfileShare',
            'createReviewTemplate',
            'createTemplateShare',
            'createWorkload',
            'createWorkloadShare',
            'deleteLens',
            'deleteLensShare',
            'deleteProfile',
            'deleteProfileShare',
            'deleteReviewTemplate',
            'deleteTemplateShare',
            'deleteWorkload',
            'deleteWorkloadShare',
            'disassociateLenses',
            'disassociateProfiles',
            'exportLens',
            'getAnswer',
            'getConsolidatedReport',
            'getGlobalSettings',
            'getLens',
            'getLensReview',
            'getLensReviewReport',
            'getLensVersionDifference',
            'getMilestone',
            'getProfile',
            'getProfileTemplate',
            'getReviewTemplate',
            'getReviewTemplateAnswer',
            'getReviewTemplateLensReview',
            'getWorkload',
            'importLens',
            'listAnswers',
            'listCheckDetails',
            'listCheckSummaries',
            'listLensReviewImprovements',
            'listLensReviews',
            'listLensShares',
            'listLenses',
            'listMilestones',
            'listNotifications',
            'listProfileNotifications',
            'listProfileShares',
            'listProfiles',
            'listReviewTemplateAnswers',
            'listReviewTemplates',
            'listShareInvitations',
            'listTagsForResource',
            'listTemplateShares',
            'listWorkloadShares',
            'listWorkloads',
            'tagResource',
            'untagResource',
            'updateAnswer',
            'updateGlobalSettings',
            'updateIntegration',
            'updateLensReview',
            'updateProfile',
            'updateReviewTemplate',
            'updateReviewTemplateAnswer',
            'updateReviewTemplateLensReview',
            'updateShareInvitation',
            'updateWorkload',
            'updateWorkloadShare',
            'upgradeLensReview',
            'upgradeProfileVersion',
            'upgradeReviewTemplateLensReview',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateLenses' => $this->associateLenses(),
            'associateProfiles' => $this->associateProfiles(),
            'createLensShare' => $this->createLensShare(),
            'createLensVersion' => $this->createLensVersion(),
            'createMilestone' => $this->createMilestone(),
            'createProfile' => $this->createProfile(),
            'createProfileShare' => $this->createProfileShare(),
            'createReviewTemplate' => $this->createReviewTemplate(),
            'createTemplateShare' => $this->createTemplateShare(),
            'createWorkload' => $this->createWorkload(),
            'createWorkloadShare' => $this->createWorkloadShare(),
            'deleteLens' => $this->deleteLens(),
            'deleteLensShare' => $this->deleteLensShare(),
            'deleteProfile' => $this->deleteProfile(),
            'deleteProfileShare' => $this->deleteProfileShare(),
            'deleteReviewTemplate' => $this->deleteReviewTemplate(),
            'deleteTemplateShare' => $this->deleteTemplateShare(),
            'deleteWorkload' => $this->deleteWorkload(),
            'deleteWorkloadShare' => $this->deleteWorkloadShare(),
            'disassociateLenses' => $this->disassociateLenses(),
            'disassociateProfiles' => $this->disassociateProfiles(),
            'exportLens' => $this->exportLens(),
            'getAnswer' => $this->getAnswer(),
            'getConsolidatedReport' => $this->getConsolidatedReport(),
            'getGlobalSettings' => $this->getGlobalSettings(),
            'getLens' => $this->getLens(),
            'getLensReview' => $this->getLensReview(),
            'getLensReviewReport' => $this->getLensReviewReport(),
            'getLensVersionDifference' => $this->getLensVersionDifference(),
            'getMilestone' => $this->getMilestone(),
            'getProfile' => $this->getProfile(),
            'getProfileTemplate' => $this->getProfileTemplate(),
            'getReviewTemplate' => $this->getReviewTemplate(),
            'getReviewTemplateAnswer' => $this->getReviewTemplateAnswer(),
            'getReviewTemplateLensReview' => $this->getReviewTemplateLensReview(),
            'getWorkload' => $this->getWorkload(),
            'importLens' => $this->importLens(),
            'listAnswers' => $this->listAnswers(),
            'listCheckDetails' => $this->listCheckDetails(),
            'listCheckSummaries' => $this->listCheckSummaries(),
            'listLensReviewImprovements' => $this->listLensReviewImprovements(),
            'listLensReviews' => $this->listLensReviews(),
            'listLensShares' => $this->listLensShares(),
            'listLenses' => $this->listLenses(),
            'listMilestones' => $this->listMilestones(),
            'listNotifications' => $this->listNotifications(),
            'listProfileNotifications' => $this->listProfileNotifications(),
            'listProfileShares' => $this->listProfileShares(),
            'listProfiles' => $this->listProfiles(),
            'listReviewTemplateAnswers' => $this->listReviewTemplateAnswers(),
            'listReviewTemplates' => $this->listReviewTemplates(),
            'listShareInvitations' => $this->listShareInvitations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTemplateShares' => $this->listTemplateShares(),
            'listWorkloadShares' => $this->listWorkloadShares(),
            'listWorkloads' => $this->listWorkloads(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAnswer' => $this->updateAnswer(),
            'updateGlobalSettings' => $this->updateGlobalSettings(),
            'updateIntegration' => $this->updateIntegration(),
            'updateLensReview' => $this->updateLensReview(),
            'updateProfile' => $this->updateProfile(),
            'updateReviewTemplate' => $this->updateReviewTemplate(),
            'updateReviewTemplateAnswer' => $this->updateReviewTemplateAnswer(),
            'updateReviewTemplateLensReview' => $this->updateReviewTemplateLensReview(),
            'updateShareInvitation' => $this->updateShareInvitation(),
            'updateWorkload' => $this->updateWorkload(),
            'updateWorkloadShare' => $this->updateWorkloadShare(),
            'upgradeLensReview' => $this->upgradeLensReview(),
            'upgradeProfileVersion' => $this->upgradeProfileVersion(),
            'upgradeReviewTemplateLensReview' => $this->upgradeReviewTemplateLensReview(),
        };
    }
    private function associateLenses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function associateProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createLensShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ShareId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLensVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LensVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createMilestone(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('MilestoneNumber'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function createProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ProfileVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createProfileShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ShareId'),
                new \PHPStan\Type\Constant\ConstantStringType('ProfileArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createReviewTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TemplateArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTemplateShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TemplateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ShareId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWorkload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWorkloadShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('ShareId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteLens(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteLensShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteProfileShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteReviewTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteTemplateShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteWorkload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteWorkloadShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateLenses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function exportLens(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LensJSON'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAnswer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('MilestoneNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Answer'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionTitle'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImprovementPlanUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('HelpfulResourceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('HelpfulResourceDisplayText'),
                    new \PHPStan\Type\Constant\ConstantStringType('Choices'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectedChoices'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChoiceAnswers'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsApplicable'),
                    new \PHPStan\Type\Constant\ConstantStringType('Risk'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('JiraConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('HelpfulResource'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImprovementPlan'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalResources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HELPFUL_RESOURCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMPROVEMENT_PLAN'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSELECTED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_SCOPE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_PRIORITIES'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHITECTURE_CONSTRAINTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_SCOPE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_PRIORITIES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHITECTURE_CONSTRAINTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JiraIssueUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastSyncedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getConsolidatedReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Base64String'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MetricType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RiskCounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadName'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Lenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensesAppliedCount'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('WORKLOAD'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pillars'),
                        new \PHPStan\Type\Constant\ConstantStringType('RiskCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RiskCounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('Questions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                            ]), new \PHPStan\Type\IntegerType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QuestionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Risk'),
                                new \PHPStan\Type\Constant\ConstantStringType('BestPractices'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ChoiceTitle'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ])),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        ]), new \PHPStan\Type\IntegerType()),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getGlobalSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationSharingStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DiscoveryIntegrationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('JiraConfiguration'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('IssueManagementStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('IssueManagementType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subdomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('JiraProjectKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getLens(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Lens'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareInvitationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getLensReview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('MilestoneNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('LensReview'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PillarReviewSummaries'),
                    new \PHPStan\Type\Constant\ConstantStringType('JiraConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('RiskCounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Profiles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrioritizedRiskCounts'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSHARED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PillarName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                        new \PHPStan\Type\Constant\ConstantStringType('RiskCounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrioritizedRiskCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        ]), new \PHPStan\Type\IntegerType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        ]), new \PHPStan\Type\IntegerType()),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SelectedPillars'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SelectedQuestionIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProfileArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProfileVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]), new \PHPStan\Type\IntegerType()),
                ]),
            ]),
        ]);
    }
    private function getLensReviewReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('MilestoneNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('LensReviewReport'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Base64String'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getLensVersionDifference(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                new \PHPStan\Type\Constant\ConstantStringType('BaseLensVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetLensVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestLensVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionDifferences'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PillarDifferences'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PillarName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DifferenceStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuestionDifferences'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEW'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('QuestionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('QuestionTitle'),
                            new \PHPStan\Type\Constant\ConstantStringType('DifferenceStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('NEW'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            ]),
                        ])),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getMilestone(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('Milestone'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MilestoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('MilestoneName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Workload'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkloadArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkloadName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsRegions'),
                        new \PHPStan\Type\Constant\ConstantStringType('NonAwsRegions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArchitecturalDesign'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReviewOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReviewRestrictionDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsReviewOwnerUpdateAcknowledged'),
                        new \PHPStan\Type\Constant\ConstantStringType('IndustryType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Industry'),
                        new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImprovementStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('RiskCounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('PillarPriorities'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lenses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShareInvitationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('DiscoveryConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('Applications'),
                        new \PHPStan\Type\Constant\ConstantStringType('Profiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrioritizedRiskCounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('JiraConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PRODUCTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREPRODUCTION'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RISK_ACKNOWLEDGED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        ]), new \PHPStan\Type\IntegerType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedAdvisorIntegrationStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkloadResourceDefinition'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WORKLOAD_METADATA'),
                                new \PHPStan\Type\Constant\ConstantStringType('APP_REGISTRY'),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ProfileArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProfileVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        ]), new \PHPStan\Type\IntegerType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IssueManagementStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('IssueManagementType'),
                            new \PHPStan\Type\Constant\ConstantStringType('JiraProjectKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                                new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Profile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileQuestions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareInvitationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('QuestionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuestionTitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuestionDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuestionChoices'),
                        new \PHPStan\Type\Constant\ConstantStringType('SelectedChoiceIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinSelectedChoices'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxSelectedChoices'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChoiceTitle'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChoiceDescription'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getProfileTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateQuestions'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('QuestionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuestionTitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuestionDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuestionChoices'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinSelectedChoices'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxSelectedChoices'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChoiceTitle'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChoiceDescription'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getReviewTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReviewTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Lenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionCounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareInvitationId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWERED'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LENS_NOT_CURRENT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getReviewTemplateAnswer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TemplateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                new \PHPStan\Type\Constant\ConstantStringType('Answer'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionTitle'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImprovementPlanUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('HelpfulResourceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('HelpfulResourceDisplayText'),
                    new \PHPStan\Type\Constant\ConstantStringType('Choices'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectedChoices'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChoiceAnswers'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsApplicable'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnswerStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('HelpfulResource'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImprovementPlan'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalResources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HELPFUL_RESOURCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMPROVEMENT_PLAN'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSELECTED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_SCOPE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_PRIORITIES'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHITECTURE_CONSTRAINTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWERED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_SCOPE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_PRIORITIES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHITECTURE_CONSTRAINTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getReviewTemplateLensReview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TemplateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LensReview'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PillarReviewSummaries'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionCounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSHARED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PillarName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuestionCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANSWERED'),
                        ]), new \PHPStan\Type\IntegerType()),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWERED'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getWorkload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Workload'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsRegions'),
                    new \PHPStan\Type\Constant\ConstantStringType('NonAwsRegions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchitecturalDesign'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewRestrictionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsReviewOwnerUpdateAcknowledged'),
                    new \PHPStan\Type\Constant\ConstantStringType('IndustryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Industry'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImprovementStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RiskCounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('PillarPriorities'),
                    new \PHPStan\Type\Constant\ConstantStringType('Lenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareInvitationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiscoveryConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Applications'),
                    new \PHPStan\Type\Constant\ConstantStringType('Profiles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrioritizedRiskCounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('JiraConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRODUCTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPRODUCTION'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RISK_ACKNOWLEDGED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TrustedAdvisorIntegrationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkloadResourceDefinition'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WORKLOAD_METADATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('APP_REGISTRY'),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProfileArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProfileVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IssueManagementStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('IssueManagementType'),
                        new \PHPStan\Type\Constant\ConstantStringType('JiraProjectKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function importLens(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
            ]),
        ]);
    }
    private function listAnswers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('MilestoneNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AnswerSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionTitle'),
                    new \PHPStan\Type\Constant\ConstantStringType('Choices'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectedChoices'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChoiceAnswerSummaries'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsApplicable'),
                    new \PHPStan\Type\Constant\ConstantStringType('Risk'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('JiraConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('HelpfulResource'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImprovementPlan'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalResources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HELPFUL_RESOURCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMPROVEMENT_PLAN'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSELECTED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_SCOPE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_PRIORITIES'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHITECTURE_CONSTRAINTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_SCOPE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_PRIORITIES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHITECTURE_CONSTRAINTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRIORITIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NON_PRIORITIZED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JiraIssueUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastSyncedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCheckDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CheckDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Provider'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlaggedResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('TRUSTED_ADVISOR'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OKAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FETCH_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ASSUME_ROLE_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREMIUM_SUPPORT_REQUIRED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCheckSummaries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CheckSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Provider'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountSummary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('TRUSTED_ADVISOR'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OKAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FETCH_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OKAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FETCH_FAILED'),
                    ]), new \PHPStan\Type\IntegerType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLensReviewImprovements(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('MilestoneNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ImprovementSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionTitle'),
                    new \PHPStan\Type\Constant\ConstantStringType('Risk'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImprovementPlanUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImprovementPlans'),
                    new \PHPStan\Type\Constant\ConstantStringType('JiraConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImprovementPlanUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JiraIssueUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastSyncedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLensReviews(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('MilestoneNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('LensReviewSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('RiskCounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('Profiles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrioritizedRiskCounts'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSHARED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProfileArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProfileVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]), new \PHPStan\Type\IntegerType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLensShares(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LensShareSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ShareId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SharedWith'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLenses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LensSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_OFFICIAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_SHARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_SELF'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSHARED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMilestones(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('MilestoneSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MilestoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('MilestoneName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadSummary'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkloadArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkloadName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lenses'),
                        new \PHPStan\Type\Constant\ConstantStringType('RiskCounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImprovementStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Profiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrioritizedRiskCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        ]), new \PHPStan\Type\IntegerType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RISK_ACKNOWLEDGED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ProfileArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProfileVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        ]), new \PHPStan\Type\IntegerType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listNotifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotificationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensUpgradeSummary'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LENS_VERSION_UPGRADED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LENS_VERSION_DEPRECATED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkloadName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                        new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentLensVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('LatestLensVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
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
    private function listProfileNotifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotificationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentProfileVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestProfileVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROFILE_ANSWERS_UPDATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROFILE_DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProfileShares(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileShareSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ShareId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SharedWith'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listReviewTemplateAnswers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TemplateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                new \PHPStan\Type\Constant\ConstantStringType('AnswerSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionTitle'),
                    new \PHPStan\Type\Constant\ConstantStringType('Choices'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectedChoices'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChoiceAnswerSummaries'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsApplicable'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnswerStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('HelpfulResource'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImprovementPlan'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalResources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HELPFUL_RESOURCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMPROVEMENT_PLAN'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSELECTED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_SCOPE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_PRIORITIES'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHITECTURE_CONSTRAINTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWERED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_SCOPE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_PRIORITIES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHITECTURE_CONSTRAINTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRIORITIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NON_PRIORITIZED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listReviewTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReviewTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Lenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LENS_NOT_CURRENT'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listShareInvitations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ShareInvitationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ShareInvitationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SharedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('SharedWith'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadName'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTRIBUTOR'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WORKLOAD'),
                        new \PHPStan\Type\Constant\ConstantStringType('LENS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROFILE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEMPLATE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function listTemplateShares(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TemplateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateShareSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ShareId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SharedWith'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWorkloadShares(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadShareSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ShareId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SharedWith'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTRIBUTOR'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWorkloads(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Lenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('RiskCounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImprovementStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Profiles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrioritizedRiskCounts'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RISK_ACKNOWLEDGED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProfileArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProfileVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]), new \PHPStan\Type\IntegerType()),
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
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateAnswer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Answer'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionTitle'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImprovementPlanUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('HelpfulResourceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('HelpfulResourceDisplayText'),
                    new \PHPStan\Type\Constant\ConstantStringType('Choices'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectedChoices'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChoiceAnswers'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsApplicable'),
                    new \PHPStan\Type\Constant\ConstantStringType('Risk'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('JiraConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('HelpfulResource'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImprovementPlan'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalResources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HELPFUL_RESOURCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMPROVEMENT_PLAN'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSELECTED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_SCOPE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_PRIORITIES'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHITECTURE_CONSTRAINTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_SCOPE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_PRIORITIES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHITECTURE_CONSTRAINTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JiraIssueUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastSyncedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateGlobalSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateLensReview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('LensReview'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PillarReviewSummaries'),
                    new \PHPStan\Type\Constant\ConstantStringType('JiraConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('RiskCounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Profiles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrioritizedRiskCounts'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSHARED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PillarName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                        new \PHPStan\Type\Constant\ConstantStringType('RiskCounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrioritizedRiskCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        ]), new \PHPStan\Type\IntegerType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        ]), new \PHPStan\Type\IntegerType()),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SelectedPillars'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SelectedQuestionIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProfileArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProfileVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]), new \PHPStan\Type\IntegerType()),
                ]),
            ]),
        ]);
    }
    private function updateProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Profile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileQuestions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareInvitationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('QuestionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuestionTitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuestionDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuestionChoices'),
                        new \PHPStan\Type\Constant\ConstantStringType('SelectedChoiceIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinSelectedChoices'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxSelectedChoices'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChoiceTitle'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChoiceDescription'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function updateReviewTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReviewTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Lenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionCounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareInvitationId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWERED'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LENS_NOT_CURRENT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateReviewTemplateAnswer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TemplateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                new \PHPStan\Type\Constant\ConstantStringType('Answer'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionTitle'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImprovementPlanUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('HelpfulResourceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('HelpfulResourceDisplayText'),
                    new \PHPStan\Type\Constant\ConstantStringType('Choices'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectedChoices'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChoiceAnswers'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsApplicable'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnswerStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('HelpfulResource'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImprovementPlan'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalResources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HELPFUL_RESOURCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMPROVEMENT_PLAN'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DisplayText'),
                                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChoiceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSELECTED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_SCOPE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_PRIORITIES'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHITECTURE_CONSTRAINTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWERED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_SCOPE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_PRIORITIES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHITECTURE_CONSTRAINTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateReviewTemplateLensReview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TemplateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LensReview'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PillarReviewSummaries'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuestionCounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSHARED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PillarId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PillarName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuestionCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANSWERED'),
                        ]), new \PHPStan\Type\IntegerType()),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWERED'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateShareInvitation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ShareInvitation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ShareInvitationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('LensArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WORKLOAD'),
                        new \PHPStan\Type\Constant\ConstantStringType('LENS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROFILE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEMPLATE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateWorkload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Workload'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsRegions'),
                    new \PHPStan\Type\Constant\ConstantStringType('NonAwsRegions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchitecturalDesign'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewRestrictionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsReviewOwnerUpdateAcknowledged'),
                    new \PHPStan\Type\Constant\ConstantStringType('IndustryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Industry'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImprovementStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RiskCounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('PillarPriorities'),
                    new \PHPStan\Type\Constant\ConstantStringType('Lenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareInvitationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiscoveryConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Applications'),
                    new \PHPStan\Type\Constant\ConstantStringType('Profiles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrioritizedRiskCounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('JiraConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRODUCTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPRODUCTION'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RISK_ACKNOWLEDGED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TrustedAdvisorIntegrationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkloadResourceDefinition'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WORKLOAD_METADATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('APP_REGISTRY'),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProfileArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProfileVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IssueManagementStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('IssueManagementType'),
                        new \PHPStan\Type\Constant\ConstantStringType('JiraProjectKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateWorkloadShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadShare'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ShareId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SharedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('SharedWith'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadName'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTRIBUTOR'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function upgradeLensReview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function upgradeProfileVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function upgradeReviewTemplateLensReview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}