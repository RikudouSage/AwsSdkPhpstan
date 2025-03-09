<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CodeCommitClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CodeCommit\CodeCommitClient>
     */
    public function getClass(): string
    {
        return \Aws\CodeCommit\CodeCommitClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateApprovalRuleTemplateWithRepository',
            'batchAssociateApprovalRuleTemplateWithRepositories',
            'batchDescribeMergeConflicts',
            'batchDisassociateApprovalRuleTemplateFromRepositories',
            'batchGetCommits',
            'batchGetRepositories',
            'createApprovalRuleTemplate',
            'createBranch',
            'createCommit',
            'createPullRequest',
            'createPullRequestApprovalRule',
            'createRepository',
            'createUnreferencedMergeCommit',
            'deleteApprovalRuleTemplate',
            'deleteBranch',
            'deleteCommentContent',
            'deleteFile',
            'deletePullRequestApprovalRule',
            'deleteRepository',
            'describeMergeConflicts',
            'describePullRequestEvents',
            'disassociateApprovalRuleTemplateFromRepository',
            'evaluatePullRequestApprovalRules',
            'getApprovalRuleTemplate',
            'getBlob',
            'getBranch',
            'getComment',
            'getCommentReactions',
            'getCommentsForComparedCommit',
            'getCommentsForPullRequest',
            'getCommit',
            'getDifferences',
            'getFile',
            'getFolder',
            'getMergeCommit',
            'getMergeConflicts',
            'getMergeOptions',
            'getPullRequest',
            'getPullRequestApprovalStates',
            'getPullRequestOverrideState',
            'getRepository',
            'getRepositoryTriggers',
            'listApprovalRuleTemplates',
            'listAssociatedApprovalRuleTemplatesForRepository',
            'listBranches',
            'listFileCommitHistory',
            'listPullRequests',
            'listRepositories',
            'listRepositoriesForApprovalRuleTemplate',
            'listTagsForResource',
            'mergeBranchesByFastForward',
            'mergeBranchesBySquash',
            'mergeBranchesByThreeWay',
            'mergePullRequestByFastForward',
            'mergePullRequestBySquash',
            'mergePullRequestByThreeWay',
            'overridePullRequestApprovalRules',
            'postCommentForComparedCommit',
            'postCommentForPullRequest',
            'postCommentReply',
            'putCommentReaction',
            'putFile',
            'putRepositoryTriggers',
            'tagResource',
            'testRepositoryTriggers',
            'untagResource',
            'updateApprovalRuleTemplateContent',
            'updateApprovalRuleTemplateDescription',
            'updateApprovalRuleTemplateName',
            'updateComment',
            'updateDefaultBranch',
            'updatePullRequestApprovalRuleContent',
            'updatePullRequestApprovalState',
            'updatePullRequestDescription',
            'updatePullRequestStatus',
            'updatePullRequestTitle',
            'updateRepositoryDescription',
            'updateRepositoryEncryptionKey',
            'updateRepositoryName',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateApprovalRuleTemplateWithRepository' => $this->associateApprovalRuleTemplateWithRepository(),
            'batchAssociateApprovalRuleTemplateWithRepositories' => $this->batchAssociateApprovalRuleTemplateWithRepositories(),
            'batchDescribeMergeConflicts' => $this->batchDescribeMergeConflicts(),
            'batchDisassociateApprovalRuleTemplateFromRepositories' => $this->batchDisassociateApprovalRuleTemplateFromRepositories(),
            'batchGetCommits' => $this->batchGetCommits(),
            'batchGetRepositories' => $this->batchGetRepositories(),
            'createApprovalRuleTemplate' => $this->createApprovalRuleTemplate(),
            'createBranch' => $this->createBranch(),
            'createCommit' => $this->createCommit(),
            'createPullRequest' => $this->createPullRequest(),
            'createPullRequestApprovalRule' => $this->createPullRequestApprovalRule(),
            'createRepository' => $this->createRepository(),
            'createUnreferencedMergeCommit' => $this->createUnreferencedMergeCommit(),
            'deleteApprovalRuleTemplate' => $this->deleteApprovalRuleTemplate(),
            'deleteBranch' => $this->deleteBranch(),
            'deleteCommentContent' => $this->deleteCommentContent(),
            'deleteFile' => $this->deleteFile(),
            'deletePullRequestApprovalRule' => $this->deletePullRequestApprovalRule(),
            'deleteRepository' => $this->deleteRepository(),
            'describeMergeConflicts' => $this->describeMergeConflicts(),
            'describePullRequestEvents' => $this->describePullRequestEvents(),
            'disassociateApprovalRuleTemplateFromRepository' => $this->disassociateApprovalRuleTemplateFromRepository(),
            'evaluatePullRequestApprovalRules' => $this->evaluatePullRequestApprovalRules(),
            'getApprovalRuleTemplate' => $this->getApprovalRuleTemplate(),
            'getBlob' => $this->getBlob(),
            'getBranch' => $this->getBranch(),
            'getComment' => $this->getComment(),
            'getCommentReactions' => $this->getCommentReactions(),
            'getCommentsForComparedCommit' => $this->getCommentsForComparedCommit(),
            'getCommentsForPullRequest' => $this->getCommentsForPullRequest(),
            'getCommit' => $this->getCommit(),
            'getDifferences' => $this->getDifferences(),
            'getFile' => $this->getFile(),
            'getFolder' => $this->getFolder(),
            'getMergeCommit' => $this->getMergeCommit(),
            'getMergeConflicts' => $this->getMergeConflicts(),
            'getMergeOptions' => $this->getMergeOptions(),
            'getPullRequest' => $this->getPullRequest(),
            'getPullRequestApprovalStates' => $this->getPullRequestApprovalStates(),
            'getPullRequestOverrideState' => $this->getPullRequestOverrideState(),
            'getRepository' => $this->getRepository(),
            'getRepositoryTriggers' => $this->getRepositoryTriggers(),
            'listApprovalRuleTemplates' => $this->listApprovalRuleTemplates(),
            'listAssociatedApprovalRuleTemplatesForRepository' => $this->listAssociatedApprovalRuleTemplatesForRepository(),
            'listBranches' => $this->listBranches(),
            'listFileCommitHistory' => $this->listFileCommitHistory(),
            'listPullRequests' => $this->listPullRequests(),
            'listRepositories' => $this->listRepositories(),
            'listRepositoriesForApprovalRuleTemplate' => $this->listRepositoriesForApprovalRuleTemplate(),
            'listTagsForResource' => $this->listTagsForResource(),
            'mergeBranchesByFastForward' => $this->mergeBranchesByFastForward(),
            'mergeBranchesBySquash' => $this->mergeBranchesBySquash(),
            'mergeBranchesByThreeWay' => $this->mergeBranchesByThreeWay(),
            'mergePullRequestByFastForward' => $this->mergePullRequestByFastForward(),
            'mergePullRequestBySquash' => $this->mergePullRequestBySquash(),
            'mergePullRequestByThreeWay' => $this->mergePullRequestByThreeWay(),
            'overridePullRequestApprovalRules' => $this->overridePullRequestApprovalRules(),
            'postCommentForComparedCommit' => $this->postCommentForComparedCommit(),
            'postCommentForPullRequest' => $this->postCommentForPullRequest(),
            'postCommentReply' => $this->postCommentReply(),
            'putCommentReaction' => $this->putCommentReaction(),
            'putFile' => $this->putFile(),
            'putRepositoryTriggers' => $this->putRepositoryTriggers(),
            'tagResource' => $this->tagResource(),
            'testRepositoryTriggers' => $this->testRepositoryTriggers(),
            'untagResource' => $this->untagResource(),
            'updateApprovalRuleTemplateContent' => $this->updateApprovalRuleTemplateContent(),
            'updateApprovalRuleTemplateDescription' => $this->updateApprovalRuleTemplateDescription(),
            'updateApprovalRuleTemplateName' => $this->updateApprovalRuleTemplateName(),
            'updateComment' => $this->updateComment(),
            'updateDefaultBranch' => $this->updateDefaultBranch(),
            'updatePullRequestApprovalRuleContent' => $this->updatePullRequestApprovalRuleContent(),
            'updatePullRequestApprovalState' => $this->updatePullRequestApprovalState(),
            'updatePullRequestDescription' => $this->updatePullRequestDescription(),
            'updatePullRequestStatus' => $this->updatePullRequestStatus(),
            'updatePullRequestTitle' => $this->updatePullRequestTitle(),
            'updateRepositoryDescription' => $this->updateRepositoryDescription(),
            'updateRepositoryEncryptionKey' => $this->updateRepositoryEncryptionKey(),
            'updateRepositoryName' => $this->updateRepositoryName(),
        };
    }
    private function associateApprovalRuleTemplateWithRepository(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function batchAssociateApprovalRuleTemplateWithRepositories(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('associatedRepositoryNames'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
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
    private function batchDescribeMergeConflicts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('conflicts'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
                new \PHPStan\Type\Constant\ConstantStringType('destinationCommitId'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceCommitId'),
                new \PHPStan\Type\Constant\ConstantStringType('baseCommitId'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('conflictMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('mergeHunks'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('fileSizes'),
                            new \PHPStan\Type\Constant\ConstantStringType('fileModes'),
                            new \PHPStan\Type\Constant\ConstantStringType('objectTypes'),
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfConflicts'),
                            new \PHPStan\Type\Constant\ConstantStringType('isBinaryFile'),
                            new \PHPStan\Type\Constant\ConstantStringType('contentConflict'),
                            new \PHPStan\Type\Constant\ConstantStringType('fileModeConflict'),
                            new \PHPStan\Type\Constant\ConstantStringType('objectTypeConflict'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeOperations'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('source'),
                                new \PHPStan\Type\Constant\ConstantStringType('destination'),
                                new \PHPStan\Type\Constant\ConstantStringType('base'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('source'),
                                new \PHPStan\Type\Constant\ConstantStringType('destination'),
                                new \PHPStan\Type\Constant\ConstantStringType('base'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EXECUTABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYMLINK'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EXECUTABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYMLINK'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EXECUTABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYMLINK'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('source'),
                                new \PHPStan\Type\Constant\ConstantStringType('destination'),
                                new \PHPStan\Type\Constant\ConstantStringType('base'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FILE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GIT_LINK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYMBOLIC_LINK'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FILE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GIT_LINK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYMBOLIC_LINK'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FILE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GIT_LINK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYMBOLIC_LINK'),
                                ]),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('source'),
                                new \PHPStan\Type\Constant\ConstantStringType('destination'),
                                new \PHPStan\Type\Constant\ConstantStringType('base'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('source'),
                                new \PHPStan\Type\Constant\ConstantStringType('destination'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('A'),
                                    new \PHPStan\Type\Constant\ConstantStringType('M'),
                                    new \PHPStan\Type\Constant\ConstantStringType('D'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('A'),
                                    new \PHPStan\Type\Constant\ConstantStringType('M'),
                                    new \PHPStan\Type\Constant\ConstantStringType('D'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isConflict'),
                                new \PHPStan\Type\Constant\ConstantStringType('source'),
                                new \PHPStan\Type\Constant\ConstantStringType('destination'),
                                new \PHPStan\Type\Constant\ConstantStringType('base'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('startLine'),
                                    new \PHPStan\Type\Constant\ConstantStringType('endLine'),
                                    new \PHPStan\Type\Constant\ConstantStringType('hunkContent'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('startLine'),
                                    new \PHPStan\Type\Constant\ConstantStringType('endLine'),
                                    new \PHPStan\Type\Constant\ConstantStringType('hunkContent'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('startLine'),
                                    new \PHPStan\Type\Constant\ConstantStringType('endLine'),
                                    new \PHPStan\Type\Constant\ConstantStringType('hunkContent'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('exceptionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function batchDisassociateApprovalRuleTemplateFromRepositories(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('disassociatedRepositoryNames'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
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
    private function batchGetCommits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commits'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                        new \PHPStan\Type\Constant\ConstantStringType('treeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('parents'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('author'),
                        new \PHPStan\Type\Constant\ConstantStringType('committer'),
                        new \PHPStan\Type\Constant\ConstantStringType('additionalData'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('email'),
                            new \PHPStan\Type\Constant\ConstantStringType('date'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('email'),
                            new \PHPStan\Type\Constant\ConstantStringType('date'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('commitId'),
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
    private function batchGetRepositories(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repositories'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoriesNotFound'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultBranch'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloneUrlHttp'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloneUrlSsh'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionIntegrityChecksFailedException'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyAccessDeniedException'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyDisabledException'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyNotFoundException'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyUnavailableException'),
                            new \PHPStan\Type\Constant\ConstantStringType('RepositoryDoesNotExistException'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createApprovalRuleTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateContent'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleContentSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedUser'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createBranch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createCommit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                new \PHPStan\Type\Constant\ConstantStringType('treeId'),
                new \PHPStan\Type\Constant\ConstantStringType('filesAdded'),
                new \PHPStan\Type\Constant\ConstantStringType('filesUpdated'),
                new \PHPStan\Type\Constant\ConstantStringType('filesDeleted'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('absolutePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('blobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXECUTABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYMLINK'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('absolutePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('blobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXECUTABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYMLINK'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('absolutePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('blobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXECUTABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYMLINK'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createPullRequest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pullRequest'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastActivityDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestTargets'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRules'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeMetadata'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isMerged'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergedBy'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeCommitId'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeOption'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAST_FORWARD_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQUASH_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('THREE_WAY_MERGE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleId'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleContent'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleContentSha256'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedUser'),
                            new \PHPStan\Type\Constant\ConstantStringType('originApprovalRuleTemplate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createPullRequestApprovalRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('approvalRule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleContent'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleContentSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedUser'),
                    new \PHPStan\Type\Constant\ConstantStringType('originApprovalRuleTemplate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createRepository(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repositoryMetadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloneUrlHttp'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloneUrlSsh'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createUnreferencedMergeCommit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                new \PHPStan\Type\Constant\ConstantStringType('treeId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteApprovalRuleTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteBranch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deletedBranch'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteCommentContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('comment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('commentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('inReplyTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('callerReactions'),
                    new \PHPStan\Type\Constant\ConstantStringType('reactionCounts'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                ]),
            ]),
        ]);
    }
    private function deleteFile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                new \PHPStan\Type\Constant\ConstantStringType('blobId'),
                new \PHPStan\Type\Constant\ConstantStringType('treeId'),
                new \PHPStan\Type\Constant\ConstantStringType('filePath'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deletePullRequestApprovalRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteRepository(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repositoryId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMergeConflicts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('conflictMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('mergeHunks'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('destinationCommitId'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceCommitId'),
                new \PHPStan\Type\Constant\ConstantStringType('baseCommitId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('fileSizes'),
                    new \PHPStan\Type\Constant\ConstantStringType('fileModes'),
                    new \PHPStan\Type\Constant\ConstantStringType('objectTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfConflicts'),
                    new \PHPStan\Type\Constant\ConstantStringType('isBinaryFile'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentConflict'),
                    new \PHPStan\Type\Constant\ConstantStringType('fileModeConflict'),
                    new \PHPStan\Type\Constant\ConstantStringType('objectTypeConflict'),
                    new \PHPStan\Type\Constant\ConstantStringType('mergeOperations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXECUTABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYMLINK'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXECUTABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYMLINK'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXECUTABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYMLINK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY'),
                            new \PHPStan\Type\Constant\ConstantStringType('GIT_LINK'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYMBOLIC_LINK'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY'),
                            new \PHPStan\Type\Constant\ConstantStringType('GIT_LINK'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYMBOLIC_LINK'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY'),
                            new \PHPStan\Type\Constant\ConstantStringType('GIT_LINK'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYMBOLIC_LINK'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('A'),
                            new \PHPStan\Type\Constant\ConstantStringType('M'),
                            new \PHPStan\Type\Constant\ConstantStringType('D'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('A'),
                            new \PHPStan\Type\Constant\ConstantStringType('M'),
                            new \PHPStan\Type\Constant\ConstantStringType('D'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('isConflict'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('startLine'),
                            new \PHPStan\Type\Constant\ConstantStringType('endLine'),
                            new \PHPStan\Type\Constant\ConstantStringType('hunkContent'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('startLine'),
                            new \PHPStan\Type\Constant\ConstantStringType('endLine'),
                            new \PHPStan\Type\Constant\ConstantStringType('hunkContent'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('startLine'),
                            new \PHPStan\Type\Constant\ConstantStringType('endLine'),
                            new \PHPStan\Type\Constant\ConstantStringType('hunkContent'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describePullRequestEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pullRequestEvents'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('pullRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('pullRequestEventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('actorArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('pullRequestCreatedEventMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('pullRequestStatusChangedEventMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('pullRequestSourceReferenceUpdatedEventMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('pullRequestMergedStateChangedEventMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('approvalRuleEventMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('approvalStateChangedEventMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('approvalRuleOverriddenEventMetadata'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST_CREATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST_STATUS_CHANGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST_SOURCE_REFERENCE_UPDATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST_MERGE_STATE_CHANGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST_APPROVAL_RULE_CREATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST_APPROVAL_RULE_UPDATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST_APPROVAL_RULE_DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST_APPROVAL_RULE_OVERRIDDEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST_APPROVAL_STATE_CHANGED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceCommitId'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationCommitId'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeBase'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pullRequestStatus'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                                new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('beforeCommitId'),
                            new \PHPStan\Type\Constant\ConstantStringType('afterCommitId'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeBase'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeMetadata'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isMerged'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergedBy'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeCommitId'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeOption'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAST_FORWARD_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQUASH_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('THREE_WAY_MERGE'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleId'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleContent'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('APPROVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('overrideStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OVERRIDE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateApprovalRuleTemplateFromRepository(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function evaluatePullRequestApprovalRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('evaluation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('approved'),
                    new \PHPStan\Type\Constant\ConstantStringType('overridden'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRulesSatisfied'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRulesNotSatisfied'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getApprovalRuleTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateContent'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleContentSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedUser'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getBlob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('content'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function getBranch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('branch'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getComment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('comment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('commentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('inReplyTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('callerReactions'),
                    new \PHPStan\Type\Constant\ConstantStringType('reactionCounts'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                ]),
            ]),
        ]);
    }
    private function getCommentReactions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('reactionsForComment'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('reaction'),
                        new \PHPStan\Type\Constant\ConstantStringType('reactionUsers'),
                        new \PHPStan\Type\Constant\ConstantStringType('reactionsFromDeletedUsersCount'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('emoji'),
                            new \PHPStan\Type\Constant\ConstantStringType('shortCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('unicode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCommentsForComparedCommit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commentsForComparedCommitData'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('beforeCommitId'),
                        new \PHPStan\Type\Constant\ConstantStringType('afterCommitId'),
                        new \PHPStan\Type\Constant\ConstantStringType('beforeBlobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('afterBlobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('comments'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('filePosition'),
                            new \PHPStan\Type\Constant\ConstantStringType('relativeFileVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BEFORE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AFTER'),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('commentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('inReplyTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('authorArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                                new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                                new \PHPStan\Type\Constant\ConstantStringType('callerReactions'),
                                new \PHPStan\Type\Constant\ConstantStringType('reactionCounts'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCommentsForPullRequest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commentsForPullRequestData'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('pullRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('beforeCommitId'),
                        new \PHPStan\Type\Constant\ConstantStringType('afterCommitId'),
                        new \PHPStan\Type\Constant\ConstantStringType('beforeBlobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('afterBlobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('comments'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('filePosition'),
                            new \PHPStan\Type\Constant\ConstantStringType('relativeFileVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BEFORE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AFTER'),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('commentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('inReplyTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('authorArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                                new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                                new \PHPStan\Type\Constant\ConstantStringType('callerReactions'),
                                new \PHPStan\Type\Constant\ConstantStringType('reactionCounts'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCommit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commit'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('treeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('parents'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('author'),
                    new \PHPStan\Type\Constant\ConstantStringType('committer'),
                    new \PHPStan\Type\Constant\ConstantStringType('additionalData'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                        new \PHPStan\Type\Constant\ConstantStringType('date'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                        new \PHPStan\Type\Constant\ConstantStringType('date'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getDifferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('differences'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('beforeBlob'),
                        new \PHPStan\Type\Constant\ConstantStringType('afterBlob'),
                        new \PHPStan\Type\Constant\ConstantStringType('changeType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('blobId'),
                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                            new \PHPStan\Type\Constant\ConstantStringType('mode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('blobId'),
                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                            new \PHPStan\Type\Constant\ConstantStringType('mode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('A'),
                            new \PHPStan\Type\Constant\ConstantStringType('M'),
                            new \PHPStan\Type\Constant\ConstantStringType('D'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getFile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                new \PHPStan\Type\Constant\ConstantStringType('blobId'),
                new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                new \PHPStan\Type\Constant\ConstantStringType('fileMode'),
                new \PHPStan\Type\Constant\ConstantStringType('fileSize'),
                new \PHPStan\Type\Constant\ConstantStringType('fileContent'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EXECUTABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('SYMLINK'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function getFolder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                new \PHPStan\Type\Constant\ConstantStringType('folderPath'),
                new \PHPStan\Type\Constant\ConstantStringType('treeId'),
                new \PHPStan\Type\Constant\ConstantStringType('subFolders'),
                new \PHPStan\Type\Constant\ConstantStringType('files'),
                new \PHPStan\Type\Constant\ConstantStringType('symbolicLinks'),
                new \PHPStan\Type\Constant\ConstantStringType('subModules'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('treeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('absolutePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('relativePath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('blobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('absolutePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('relativePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXECUTABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYMLINK'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('blobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('absolutePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('relativePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXECUTABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYMLINK'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                        new \PHPStan\Type\Constant\ConstantStringType('absolutePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('relativePath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getMergeCommit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sourceCommitId'),
                new \PHPStan\Type\Constant\ConstantStringType('destinationCommitId'),
                new \PHPStan\Type\Constant\ConstantStringType('baseCommitId'),
                new \PHPStan\Type\Constant\ConstantStringType('mergedCommitId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getMergeConflicts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('mergeable'),
                new \PHPStan\Type\Constant\ConstantStringType('destinationCommitId'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceCommitId'),
                new \PHPStan\Type\Constant\ConstantStringType('baseCommitId'),
                new \PHPStan\Type\Constant\ConstantStringType('conflictMetadataList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileSizes'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileModes'),
                        new \PHPStan\Type\Constant\ConstantStringType('objectTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfConflicts'),
                        new \PHPStan\Type\Constant\ConstantStringType('isBinaryFile'),
                        new \PHPStan\Type\Constant\ConstantStringType('contentConflict'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileModeConflict'),
                        new \PHPStan\Type\Constant\ConstantStringType('objectTypeConflict'),
                        new \PHPStan\Type\Constant\ConstantStringType('mergeOperations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('destination'),
                            new \PHPStan\Type\Constant\ConstantStringType('base'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('destination'),
                            new \PHPStan\Type\Constant\ConstantStringType('base'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EXECUTABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('SYMLINK'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EXECUTABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('SYMLINK'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EXECUTABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('SYMLINK'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('destination'),
                            new \PHPStan\Type\Constant\ConstantStringType('base'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FILE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY'),
                                new \PHPStan\Type\Constant\ConstantStringType('GIT_LINK'),
                                new \PHPStan\Type\Constant\ConstantStringType('SYMBOLIC_LINK'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FILE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY'),
                                new \PHPStan\Type\Constant\ConstantStringType('GIT_LINK'),
                                new \PHPStan\Type\Constant\ConstantStringType('SYMBOLIC_LINK'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FILE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY'),
                                new \PHPStan\Type\Constant\ConstantStringType('GIT_LINK'),
                                new \PHPStan\Type\Constant\ConstantStringType('SYMBOLIC_LINK'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('destination'),
                            new \PHPStan\Type\Constant\ConstantStringType('base'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('destination'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('A'),
                                new \PHPStan\Type\Constant\ConstantStringType('M'),
                                new \PHPStan\Type\Constant\ConstantStringType('D'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('A'),
                                new \PHPStan\Type\Constant\ConstantStringType('M'),
                                new \PHPStan\Type\Constant\ConstantStringType('D'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getMergeOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('mergeOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceCommitId'),
                new \PHPStan\Type\Constant\ConstantStringType('destinationCommitId'),
                new \PHPStan\Type\Constant\ConstantStringType('baseCommitId'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAST_FORWARD_MERGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQUASH_MERGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('THREE_WAY_MERGE'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPullRequest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pullRequest'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastActivityDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestTargets'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRules'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeMetadata'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isMerged'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergedBy'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeCommitId'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeOption'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAST_FORWARD_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQUASH_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('THREE_WAY_MERGE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleId'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleContent'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleContentSha256'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedUser'),
                            new \PHPStan\Type\Constant\ConstantStringType('originApprovalRuleTemplate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getPullRequestApprovalStates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('approvals'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('userArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('approvalState'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVOKE'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getPullRequestOverrideState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('overridden'),
                new \PHPStan\Type\Constant\ConstantStringType('overrider'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRepository(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repositoryMetadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloneUrlHttp'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloneUrlSsh'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getRepositoryTriggers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('triggers'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('destinationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('customData'),
                        new \PHPStan\Type\Constant\ConstantStringType('branches'),
                        new \PHPStan\Type\Constant\ConstantStringType('events'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('all'),
                                new \PHPStan\Type\Constant\ConstantStringType('updateReference'),
                                new \PHPStan\Type\Constant\ConstantStringType('createReference'),
                                new \PHPStan\Type\Constant\ConstantStringType('deleteReference'),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listApprovalRuleTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateNames'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssociatedApprovalRuleTemplatesForRepository(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateNames'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBranches(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('branches'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFileCommitHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('revisionDag'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('commit'),
                        new \PHPStan\Type\Constant\ConstantStringType('blobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                        new \PHPStan\Type\Constant\ConstantStringType('revisionChildren'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                            new \PHPStan\Type\Constant\ConstantStringType('treeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('parents'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('author'),
                            new \PHPStan\Type\Constant\ConstantStringType('committer'),
                            new \PHPStan\Type\Constant\ConstantStringType('additionalData'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('email'),
                                new \PHPStan\Type\Constant\ConstantStringType('date'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('email'),
                                new \PHPStan\Type\Constant\ConstantStringType('date'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPullRequests(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pullRequestIds'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRepositories(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repositories'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRepositoriesForApprovalRuleTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repositoryNames'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
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
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function mergeBranchesByFastForward(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                new \PHPStan\Type\Constant\ConstantStringType('treeId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function mergeBranchesBySquash(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                new \PHPStan\Type\Constant\ConstantStringType('treeId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function mergeBranchesByThreeWay(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                new \PHPStan\Type\Constant\ConstantStringType('treeId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function mergePullRequestByFastForward(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pullRequest'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastActivityDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestTargets'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRules'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeMetadata'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isMerged'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergedBy'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeCommitId'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeOption'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAST_FORWARD_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQUASH_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('THREE_WAY_MERGE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleId'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleContent'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleContentSha256'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedUser'),
                            new \PHPStan\Type\Constant\ConstantStringType('originApprovalRuleTemplate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function mergePullRequestBySquash(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pullRequest'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastActivityDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestTargets'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRules'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeMetadata'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isMerged'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergedBy'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeCommitId'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeOption'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAST_FORWARD_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQUASH_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('THREE_WAY_MERGE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleId'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleContent'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleContentSha256'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedUser'),
                            new \PHPStan\Type\Constant\ConstantStringType('originApprovalRuleTemplate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function mergePullRequestByThreeWay(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pullRequest'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastActivityDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestTargets'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRules'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeMetadata'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isMerged'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergedBy'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeCommitId'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeOption'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAST_FORWARD_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQUASH_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('THREE_WAY_MERGE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleId'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleContent'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleContentSha256'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedUser'),
                            new \PHPStan\Type\Constant\ConstantStringType('originApprovalRuleTemplate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function overridePullRequestApprovalRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function postCommentForComparedCommit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('beforeCommitId'),
                new \PHPStan\Type\Constant\ConstantStringType('afterCommitId'),
                new \PHPStan\Type\Constant\ConstantStringType('beforeBlobId'),
                new \PHPStan\Type\Constant\ConstantStringType('afterBlobId'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('comment'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('filePosition'),
                    new \PHPStan\Type\Constant\ConstantStringType('relativeFileVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BEFORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AFTER'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('commentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('inReplyTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('callerReactions'),
                    new \PHPStan\Type\Constant\ConstantStringType('reactionCounts'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                ]),
            ]),
        ]);
    }
    private function postCommentForPullRequest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('pullRequestId'),
                new \PHPStan\Type\Constant\ConstantStringType('beforeCommitId'),
                new \PHPStan\Type\Constant\ConstantStringType('afterCommitId'),
                new \PHPStan\Type\Constant\ConstantStringType('beforeBlobId'),
                new \PHPStan\Type\Constant\ConstantStringType('afterBlobId'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('comment'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('filePosition'),
                    new \PHPStan\Type\Constant\ConstantStringType('relativeFileVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BEFORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AFTER'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('commentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('inReplyTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('callerReactions'),
                    new \PHPStan\Type\Constant\ConstantStringType('reactionCounts'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                ]),
            ]),
        ]);
    }
    private function postCommentReply(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('comment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('commentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('inReplyTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('callerReactions'),
                    new \PHPStan\Type\Constant\ConstantStringType('reactionCounts'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                ]),
            ]),
        ]);
    }
    private function putCommentReaction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putFile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                new \PHPStan\Type\Constant\ConstantStringType('blobId'),
                new \PHPStan\Type\Constant\ConstantStringType('treeId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putRepositoryTriggers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configurationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function testRepositoryTriggers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('successfulExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('failedExecutions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('trigger'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateApprovalRuleTemplateContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateContent'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleContentSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedUser'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateApprovalRuleTemplateDescription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateContent'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleContentSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedUser'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateApprovalRuleTemplateName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateContent'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleContentSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedUser'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateComment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('comment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('commentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('inReplyTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('callerReactions'),
                    new \PHPStan\Type\Constant\ConstantStringType('reactionCounts'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                ]),
            ]),
        ]);
    }
    private function updateDefaultBranch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updatePullRequestApprovalRuleContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('approvalRule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRuleContent'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleContentSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedUser'),
                    new \PHPStan\Type\Constant\ConstantStringType('originApprovalRuleTemplate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updatePullRequestApprovalState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updatePullRequestDescription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pullRequest'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastActivityDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestTargets'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRules'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeMetadata'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isMerged'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergedBy'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeCommitId'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeOption'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAST_FORWARD_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQUASH_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('THREE_WAY_MERGE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleId'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleContent'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleContentSha256'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedUser'),
                            new \PHPStan\Type\Constant\ConstantStringType('originApprovalRuleTemplate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updatePullRequestStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pullRequest'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastActivityDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestTargets'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRules'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeMetadata'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isMerged'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergedBy'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeCommitId'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeOption'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAST_FORWARD_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQUASH_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('THREE_WAY_MERGE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleId'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleContent'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleContentSha256'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedUser'),
                            new \PHPStan\Type\Constant\ConstantStringType('originApprovalRuleTemplate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updatePullRequestTitle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pullRequest'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastActivityDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestTargets'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('approvalRules'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('mergeMetadata'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isMerged'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergedBy'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeCommitId'),
                                new \PHPStan\Type\Constant\ConstantStringType('mergeOption'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAST_FORWARD_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQUASH_MERGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('THREE_WAY_MERGE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleId'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('approvalRuleContent'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleContentSha256'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedUser'),
                            new \PHPStan\Type\Constant\ConstantStringType('originApprovalRuleTemplate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('approvalRuleTemplateName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateRepositoryDescription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateRepositoryEncryptionKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repositoryId'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('originalKmsKeyId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateRepositoryName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}