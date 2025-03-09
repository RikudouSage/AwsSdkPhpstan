<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class AccessAnalyzerClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\AccessAnalyzer\AccessAnalyzerClient>
     */
    public function getClass(): string
    {
        return \Aws\AccessAnalyzer\AccessAnalyzerClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'applyArchiveRule',
            'cancelPolicyGeneration',
            'checkAccessNotGranted',
            'checkNoNewAccess',
            'checkNoPublicAccess',
            'createAccessPreview',
            'createAnalyzer',
            'createArchiveRule',
            'deleteAnalyzer',
            'deleteArchiveRule',
            'generateFindingRecommendation',
            'getAccessPreview',
            'getAnalyzedResource',
            'getAnalyzer',
            'getArchiveRule',
            'getFinding',
            'getFindingRecommendation',
            'getFindingV2',
            'getFindingsStatistics',
            'getGeneratedPolicy',
            'listAccessPreviewFindings',
            'listAccessPreviews',
            'listAnalyzedResources',
            'listAnalyzers',
            'listArchiveRules',
            'listFindings',
            'listFindingsV2',
            'listPolicyGenerations',
            'listTagsForResource',
            'startPolicyGeneration',
            'startResourceScan',
            'tagResource',
            'untagResource',
            'updateAnalyzer',
            'updateArchiveRule',
            'updateFindings',
            'validatePolicy',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'applyArchiveRule' => $this->applyArchiveRule(),
            'cancelPolicyGeneration' => $this->cancelPolicyGeneration(),
            'checkAccessNotGranted' => $this->checkAccessNotGranted(),
            'checkNoNewAccess' => $this->checkNoNewAccess(),
            'checkNoPublicAccess' => $this->checkNoPublicAccess(),
            'createAccessPreview' => $this->createAccessPreview(),
            'createAnalyzer' => $this->createAnalyzer(),
            'createArchiveRule' => $this->createArchiveRule(),
            'deleteAnalyzer' => $this->deleteAnalyzer(),
            'deleteArchiveRule' => $this->deleteArchiveRule(),
            'generateFindingRecommendation' => $this->generateFindingRecommendation(),
            'getAccessPreview' => $this->getAccessPreview(),
            'getAnalyzedResource' => $this->getAnalyzedResource(),
            'getAnalyzer' => $this->getAnalyzer(),
            'getArchiveRule' => $this->getArchiveRule(),
            'getFinding' => $this->getFinding(),
            'getFindingRecommendation' => $this->getFindingRecommendation(),
            'getFindingV2' => $this->getFindingV2(),
            'getFindingsStatistics' => $this->getFindingsStatistics(),
            'getGeneratedPolicy' => $this->getGeneratedPolicy(),
            'listAccessPreviewFindings' => $this->listAccessPreviewFindings(),
            'listAccessPreviews' => $this->listAccessPreviews(),
            'listAnalyzedResources' => $this->listAnalyzedResources(),
            'listAnalyzers' => $this->listAnalyzers(),
            'listArchiveRules' => $this->listArchiveRules(),
            'listFindings' => $this->listFindings(),
            'listFindingsV2' => $this->listFindingsV2(),
            'listPolicyGenerations' => $this->listPolicyGenerations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startPolicyGeneration' => $this->startPolicyGeneration(),
            'startResourceScan' => $this->startResourceScan(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAnalyzer' => $this->updateAnalyzer(),
            'updateArchiveRule' => $this->updateArchiveRule(),
            'updateFindings' => $this->updateFindings(),
            'validatePolicy' => $this->validatePolicy(),
        };
    }
    private function applyArchiveRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function cancelPolicyGeneration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function checkAccessNotGranted(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('result'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
                new \PHPStan\Type\Constant\ConstantStringType('reasons'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PASS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('statementIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('statementId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function checkNoNewAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('result'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
                new \PHPStan\Type\Constant\ConstantStringType('reasons'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PASS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('statementIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('statementId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function checkNoPublicAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('result'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
                new \PHPStan\Type\Constant\ConstantStringType('reasons'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PASS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('statementIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('statementId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function createAccessPreview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAnalyzer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createArchiveRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAnalyzer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteArchiveRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function generateFindingRecommendation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getAccessPreview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accessPreview'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('analyzerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('configurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ebsSnapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecrRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('efsFileSystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('rdsDbClusterSnapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('rdsDbSnapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('secretsManagerSecret'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('snsTopic'),
                        new \PHPStan\Type\Constant\ConstantStringType('sqsQueue'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3ExpressDirectoryBucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodbStream'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodbTable'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('userIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('groups'),
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryPolicy'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('trustPolicy'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fileSystemPolicy'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('keyPolicies'),
                            new \PHPStan\Type\Constant\ConstantStringType('grants'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('operations'),
                                new \PHPStan\Type\Constant\ConstantStringType('granteePrincipal'),
                                new \PHPStan\Type\Constant\ConstantStringType('retiringPrincipal'),
                                new \PHPStan\Type\Constant\ConstantStringType('constraints'),
                                new \PHPStan\Type\Constant\ConstantStringType('issuingAccount'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CreateGrant'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Decrypt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DescribeKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Encrypt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GenerateDataKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GenerateDataKeyPair'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GenerateDataKeyPairWithoutPlaintext'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GenerateDataKeyWithoutPlaintext'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GetPublicKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReEncryptFrom'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReEncryptTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RetireGrant'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Sign'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Verify'),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('encryptionContextEquals'),
                                    new \PHPStan\Type\Constant\ConstantStringType('encryptionContextSubset'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('accountIds'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('accountIds'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('secretPolicy'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketAclGrants'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketPublicAccessBlock'),
                            new \PHPStan\Type\Constant\ConstantStringType('accessPoints'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('permission'),
                                new \PHPStan\Type\Constant\ConstantStringType('grantee'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('READ'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('READ_ACP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WRITE_ACP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FULL_CONTROL'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ignorePublicAcls'),
                                new \PHPStan\Type\Constant\ConstantStringType('restrictPublicBuckets'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('accessPointPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('publicAccessBlock'),
                                new \PHPStan\Type\Constant\ConstantStringType('networkOrigin'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ignorePublicAcls'),
                                    new \PHPStan\Type\Constant\ConstantStringType('restrictPublicBuckets'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('internetConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('topicPolicy'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('queuePolicy'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketPolicy'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('streamPolicy'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('tablePolicy'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_CONFIGURATION'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getAnalyzedResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resource'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('analyzedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('isPublic'),
                    new \PHPStan\Type\Constant\ConstantStringType('actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('sharedVia'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceOwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::S3::Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::IAM::Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SQS::Queue'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::Function'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::LayerVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::KMS::Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SecretsManager::Secret'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EFS::FileSystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Snapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::ECR::Repository'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::RDS::DBSnapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::RDS::DBClusterSnapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SNS::Topic'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::S3Express::DirectoryBucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::DynamoDB::Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::DynamoDB::Stream'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::IAM::User'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getAnalyzer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analyzer'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastResourceAnalyzed'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastResourceAnalyzedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_UNUSED_ACCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION_UNUSED_ACCESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_SERVICE_ACCESS_DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELEGATED_ADMINISTRATOR_DEREGISTERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION_DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_LINKED_ROLE_CREATION_FAILED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('unusedAccess'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('unusedAccessAge'),
                            new \PHPStan\Type\Constant\ConstantStringType('analysisRule'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('exclusions'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('accountIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                                ])),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getArchiveRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('archiveRule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('filter'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eq'),
                        new \PHPStan\Type\Constant\ConstantStringType('neq'),
                        new \PHPStan\Type\Constant\ConstantStringType('contains'),
                        new \PHPStan\Type\Constant\ConstantStringType('exists'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getFinding(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('finding'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('principal'),
                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                    new \PHPStan\Type\Constant\ConstantStringType('isPublic'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('condition'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('analyzedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceOwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                    new \PHPStan\Type\Constant\ConstantStringType('sources'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceControlPolicyRestriction'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::S3::Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::IAM::Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SQS::Queue'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::Function'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::LayerVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::KMS::Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SecretsManager::Secret'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EFS::FileSystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Snapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::ECR::Repository'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::RDS::DBSnapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::RDS::DBClusterSnapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SNS::Topic'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::S3Express::DirectoryBucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::DynamoDB::Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::DynamoDB::Stream'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::IAM::User'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('detail'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUCKET_ACL'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3_ACCESS_POINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3_ACCESS_POINT_ACCOUNT'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accessPointArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('accessPointAccount'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPLICABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_EVALUATE_RCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getFindingRecommendation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('completedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('error'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('recommendedSteps'),
                new \PHPStan\Type\Constant\ConstantStringType('recommendationType'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('unusedPermissionsRecommendedStep'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('policyUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('recommendedAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('recommendedPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('existingPolicyId'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DETACH_POLICY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantStringType('UnusedPermissionRecommendation'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                ]),
            ]),
        ]);
    }
    private function getFindingV2(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analyzedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('error'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceOwnerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('findingDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('findingType'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::S3::Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::IAM::Role'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::SQS::Queue'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::Function'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::LayerVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::KMS::Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::SecretsManager::Secret'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::EFS::FileSystem'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Snapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::ECR::Repository'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::RDS::DBSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::RDS::DBClusterSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::SNS::Topic'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::S3Express::DirectoryBucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::DynamoDB::Table'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::DynamoDB::Stream'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS::IAM::User'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('externalAccessDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('unusedPermissionDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('unusedIamUserAccessKeyDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('unusedIamRoleDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('unusedIamUserPasswordDetails'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                        new \PHPStan\Type\Constant\ConstantStringType('condition'),
                        new \PHPStan\Type\Constant\ConstantStringType('isPublic'),
                        new \PHPStan\Type\Constant\ConstantStringType('principal'),
                        new \PHPStan\Type\Constant\ConstantStringType('sources'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceControlPolicyRestriction'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('detail'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('POLICY'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUCKET_ACL'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3_ACCESS_POINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3_ACCESS_POINT_ACCOUNT'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('accessPointArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('accessPointAccount'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('APPLICABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_EVALUATE_RCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actions'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceNamespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastAccessed'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastAccessed'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accessKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastAccessed'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lastAccessed'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lastAccessed'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExternalAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnusedIAMRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnusedIAMUserAccessKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnusedIAMUserPassword'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnusedPermission'),
                ]),
            ]),
        ]);
    }
    private function getFindingsStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('findingsStatistics'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('externalAccessFindingsStatistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('unusedAccessFindingsStatistics'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceTypeStatistics'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalActiveFindings'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalArchivedFindings'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalResolvedFindings'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::S3::Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::IAM::Role'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::SQS::Queue'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::Function'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::LayerVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::KMS::Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::SecretsManager::Secret'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::EFS::FileSystem'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Snapshot'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::ECR::Repository'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::RDS::DBSnapshot'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::RDS::DBClusterSnapshot'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::SNS::Topic'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::S3Express::DirectoryBucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::DynamoDB::Table'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::DynamoDB::Stream'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::IAM::User'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('totalActivePublic'),
                            new \PHPStan\Type\Constant\ConstantStringType('totalActiveCrossAccount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('unusedAccessTypeStatistics'),
                        new \PHPStan\Type\Constant\ConstantStringType('topAccounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalActiveFindings'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalArchivedFindings'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalResolvedFindings'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('unusedAccessType'),
                            new \PHPStan\Type\Constant\ConstantStringType('total'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('account'),
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfActiveFindings'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getGeneratedPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('generatedPolicyResult'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('completedOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobError'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('properties'),
                    new \PHPStan\Type\Constant\ConstantStringType('generatedPolicies'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('isComplete'),
                        new \PHPStan\Type\Constant\ConstantStringType('principalArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudTrailProperties'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('trailProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudTrailArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('regions'),
                                new \PHPStan\Type\Constant\ConstantStringType('allRegions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listAccessPreviewFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('findings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('existingFindingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('existingFindingStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('principal'),
                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                    new \PHPStan\Type\Constant\ConstantStringType('condition'),
                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                    new \PHPStan\Type\Constant\ConstantStringType('isPublic'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('changeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceOwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                    new \PHPStan\Type\Constant\ConstantStringType('sources'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceControlPolicyRestriction'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::S3::Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::IAM::Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SQS::Queue'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::Function'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::LayerVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::KMS::Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SecretsManager::Secret'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EFS::FileSystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Snapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::ECR::Repository'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::RDS::DBSnapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::RDS::DBClusterSnapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SNS::Topic'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::S3Express::DirectoryBucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::DynamoDB::Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::DynamoDB::Stream'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::IAM::User'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CHANGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NEW'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNCHANGED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('detail'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUCKET_ACL'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3_ACCESS_POINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3_ACCESS_POINT_ACCOUNT'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accessPointArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('accessPointAccount'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPLICABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_EVALUATE_RCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAccessPreviews(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accessPreviews'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('analyzerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_CONFIGURATION'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAnalyzedResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analyzedResources'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceOwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::S3::Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::IAM::Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SQS::Queue'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::Function'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::LayerVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::KMS::Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SecretsManager::Secret'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EFS::FileSystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Snapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::ECR::Repository'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::RDS::DBSnapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::RDS::DBClusterSnapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SNS::Topic'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::S3Express::DirectoryBucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::DynamoDB::Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::DynamoDB::Stream'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::IAM::User'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAnalyzers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analyzers'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastResourceAnalyzed'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastResourceAnalyzedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_UNUSED_ACCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION_UNUSED_ACCESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_SERVICE_ACCESS_DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELEGATED_ADMINISTRATOR_DEREGISTERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION_DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_LINKED_ROLE_CREATION_FAILED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('unusedAccess'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('unusedAccessAge'),
                            new \PHPStan\Type\Constant\ConstantStringType('analysisRule'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('exclusions'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('accountIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                                ])),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listArchiveRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('archiveRules'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('filter'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eq'),
                        new \PHPStan\Type\Constant\ConstantStringType('neq'),
                        new \PHPStan\Type\Constant\ConstantStringType('contains'),
                        new \PHPStan\Type\Constant\ConstantStringType('exists'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('findings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('principal'),
                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                    new \PHPStan\Type\Constant\ConstantStringType('isPublic'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('condition'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('analyzedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceOwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                    new \PHPStan\Type\Constant\ConstantStringType('sources'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceControlPolicyRestriction'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::S3::Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::IAM::Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SQS::Queue'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::Function'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::LayerVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::KMS::Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SecretsManager::Secret'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EFS::FileSystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Snapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::ECR::Repository'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::RDS::DBSnapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::RDS::DBClusterSnapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SNS::Topic'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::S3Express::DirectoryBucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::DynamoDB::Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::DynamoDB::Stream'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::IAM::User'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('detail'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUCKET_ACL'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3_ACCESS_POINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3_ACCESS_POINT_ACCOUNT'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accessPointArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('accessPointAccount'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPLICABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_EVALUATE_RCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFindingsV2(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('findings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('analyzedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceOwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingType'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::S3::Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::IAM::Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SQS::Queue'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::Function'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::LayerVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::KMS::Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SecretsManager::Secret'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EFS::FileSystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Snapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::ECR::Repository'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::RDS::DBSnapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::RDS::DBClusterSnapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SNS::Topic'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::S3Express::DirectoryBucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::DynamoDB::Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::DynamoDB::Stream'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::IAM::User'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalAccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnusedIAMRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnusedIAMUserAccessKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnusedIAMUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnusedPermission'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPolicyGenerations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyGenerations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('principalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('completedOn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function startPolicyGeneration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startResourceScan(): ?\PHPStan\Type\Type
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
    private function updateAnalyzer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('unusedAccess'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('unusedAccessAge'),
                        new \PHPStan\Type\Constant\ConstantStringType('analysisRule'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('exclusions'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('accountIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                            ])),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateArchiveRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function validatePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('findings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('findingDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('issueCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('learnMoreLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('locations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY_WARNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUGGESTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                        new \PHPStan\Type\Constant\ConstantStringType('span'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('index'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('substring'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                new \PHPStan\Type\Constant\ConstantStringType('length'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('start'),
                            new \PHPStan\Type\Constant\ConstantStringType('end'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('line'),
                                new \PHPStan\Type\Constant\ConstantStringType('column'),
                                new \PHPStan\Type\Constant\ConstantStringType('offset'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('line'),
                                new \PHPStan\Type\Constant\ConstantStringType('column'),
                                new \PHPStan\Type\Constant\ConstantStringType('offset'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}