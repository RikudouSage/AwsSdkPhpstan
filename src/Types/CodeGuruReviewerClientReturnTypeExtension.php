<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CodeGuruReviewerClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CodeGuruReviewer\CodeGuruReviewerClient>
     */
    public function getClass(): string
    {
        return \Aws\CodeGuruReviewer\CodeGuruReviewerClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateRepository',
            'createCodeReview',
            'describeCodeReview',
            'describeRecommendationFeedback',
            'describeRepositoryAssociation',
            'disassociateRepository',
            'listCodeReviews',
            'listRecommendationFeedback',
            'listRecommendations',
            'listRepositoryAssociations',
            'listTagsForResource',
            'putRecommendationFeedback',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateRepository' => $this->associateRepository(),
            'createCodeReview' => $this->createCodeReview(),
            'describeCodeReview' => $this->describeCodeReview(),
            'describeRecommendationFeedback' => $this->describeRecommendationFeedback(),
            'describeRepositoryAssociation' => $this->describeRepositoryAssociation(),
            'disassociateRepository' => $this->disassociateRepository(),
            'listCodeReviews' => $this->listCodeReviews(),
            'listRecommendationFeedback' => $this->listRecommendationFeedback(),
            'listRecommendations' => $this->listRecommendations(),
            'listRepositoryAssociations' => $this->listRepositoryAssociations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putRecommendationFeedback' => $this->putRecommendationFeedback(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function associateRepository(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RepositoryAssociation'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3RepositoryDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CodeCommit'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Associated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Associating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disassociating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disassociated'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionOption'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_CMK'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED_CMK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeArtifacts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceCodeArtifactsObjectKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('BuildArtifactsObjectKey'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createCodeReview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CodeReview'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeReviewArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('PullRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceCodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnalysisTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigFileState'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CodeCommit'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PullRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('RepositoryAnalysis'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CommitDiff'),
                        new \PHPStan\Type\Constant\ConstantStringType('RepositoryHead'),
                        new \PHPStan\Type\Constant\ConstantStringType('BranchDiff'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestMetadata'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('MergeBaseCommit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BranchName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceBranchName'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationBranchName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Details'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeArtifacts'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SourceCodeArtifactsObjectKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BuildArtifactsObjectKey'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Requester'),
                            new \PHPStan\Type\Constant\ConstantStringType('EventInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('VendorName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                                new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                                new \PHPStan\Type\Constant\ConstantStringType('NativeS3'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MeteredLinesOfCodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('SuppressedLinesOfCodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('FindingsCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Security'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeQuality'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Present'),
                        new \PHPStan\Type\Constant\ConstantStringType('Absent'),
                        new \PHPStan\Type\Constant\ConstantStringType('PresentWithErrors'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeCodeReview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CodeReview'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeReviewArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('PullRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceCodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnalysisTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigFileState'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CodeCommit'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PullRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('RepositoryAnalysis'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CommitDiff'),
                        new \PHPStan\Type\Constant\ConstantStringType('RepositoryHead'),
                        new \PHPStan\Type\Constant\ConstantStringType('BranchDiff'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestMetadata'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('MergeBaseCommit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BranchName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceBranchName'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationBranchName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Details'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeArtifacts'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SourceCodeArtifactsObjectKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BuildArtifactsObjectKey'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Requester'),
                            new \PHPStan\Type\Constant\ConstantStringType('EventInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('VendorName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                                new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                                new \PHPStan\Type\Constant\ConstantStringType('NativeS3'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MeteredLinesOfCodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('SuppressedLinesOfCodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('FindingsCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Security'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeQuality'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Present'),
                        new \PHPStan\Type\Constant\ConstantStringType('Absent'),
                        new \PHPStan\Type\Constant\ConstantStringType('PresentWithErrors'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeRecommendationFeedback(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecommendationFeedback'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CodeReviewArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecommendationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reactions'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimeStamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ThumbsUp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThumbsDown'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeRepositoryAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RepositoryAssociation'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3RepositoryDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CodeCommit'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Associated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Associating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disassociating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disassociated'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionOption'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_CMK'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED_CMK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeArtifacts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceCodeArtifactsObjectKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('BuildArtifactsObjectKey'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function disassociateRepository(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RepositoryAssociation'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3RepositoryDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CodeCommit'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Associated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Associating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disassociating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disassociated'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionOption'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_CMK'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED_CMK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeArtifacts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceCodeArtifactsObjectKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('BuildArtifactsObjectKey'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listCodeReviews(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CodeReviewSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeReviewArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('PullRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricsSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceCodeType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CodeCommit'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PullRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('RepositoryAnalysis'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MeteredLinesOfCodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('SuppressedLinesOfCodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('FindingsCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CommitDiff'),
                        new \PHPStan\Type\Constant\ConstantStringType('RepositoryHead'),
                        new \PHPStan\Type\Constant\ConstantStringType('BranchDiff'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestMetadata'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('MergeBaseCommit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BranchName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceBranchName'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationBranchName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Details'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeArtifacts'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SourceCodeArtifactsObjectKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BuildArtifactsObjectKey'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Requester'),
                            new \PHPStan\Type\Constant\ConstantStringType('EventInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('VendorName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                                new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                                new \PHPStan\Type\Constant\ConstantStringType('NativeS3'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRecommendationFeedback(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecommendationFeedbackSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecommendationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reactions'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ThumbsUp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThumbsDown'),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecommendationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FilePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecommendationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartLine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndLine'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecommendationCategory'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWSBestPractices'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWSCloudFormationIssues'),
                        new \PHPStan\Type\Constant\ConstantStringType('DuplicateCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeMaintenanceIssues'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConcurrencyIssues'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputValidations'),
                        new \PHPStan\Type\Constant\ConstantStringType('PythonBestPractices'),
                        new \PHPStan\Type\Constant\ConstantStringType('JavaBestPractices'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceLeaks'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityIssues'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeInconsistencies'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShortDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('LongDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuleTags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Info'),
                        new \PHPStan\Type\Constant\ConstantStringType('Low'),
                        new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('High'),
                        new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRepositoryAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RepositoryAssociationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CodeCommit'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Associated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Associating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disassociating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disassociated'),
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
    private function putRecommendationFeedback(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
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
}