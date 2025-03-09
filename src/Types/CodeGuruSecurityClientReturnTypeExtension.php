<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CodeGuruSecurityClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CodeGuruSecurity\CodeGuruSecurityClient>
     */
    public function getClass(): string
    {
        return \Aws\CodeGuruSecurity\CodeGuruSecurityClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchGetFindings',
            'createScan',
            'createUploadUrl',
            'getAccountConfiguration',
            'getFindings',
            'getMetricsSummary',
            'getScan',
            'listFindingsMetrics',
            'listScans',
            'listTagsForResource',
            'tagResource',
            'untagResource',
            'updateAccountConfiguration',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchGetFindings' => $this->batchGetFindings(),
            'createScan' => $this->createScan(),
            'createUploadUrl' => $this->createUploadUrl(),
            'getAccountConfiguration' => $this->getAccountConfiguration(),
            'getFindings' => $this->getFindings(),
            'getMetricsSummary' => $this->getMetricsSummary(),
            'getScan' => $this->getScan(),
            'listFindingsMetrics' => $this->listFindingsMetrics(),
            'listScans' => $this->listScans(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAccountConfiguration' => $this->updateAccountConfiguration(),
        };
    }
    private function batchGetFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('failedFindings'),
                new \PHPStan\Type\Constant\ConstantStringType('findings'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('findingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('scanName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DUPLICATE_IDENTIFIER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ITEM_DOES_NOT_EXIST'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_FINDING_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SCAN_NAME'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorName'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('generatorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('remediation'),
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('vulnerability'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
                            new \PHPStan\Type\Constant\ConstantStringType('suggestedFixes'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('subResourceId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                            new \PHPStan\Type\Constant\ConstantStringType('High'),
                            new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                            new \PHPStan\Type\Constant\ConstantStringType('Low'),
                            new \PHPStan\Type\Constant\ConstantStringType('Info'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Closed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Open'),
                            new \PHPStan\Type\Constant\ConstantStringType('All'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('itemCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('referenceUrls'),
                            new \PHPStan\Type\Constant\ConstantStringType('relatedVulnerabilities'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('codeSnippet'),
                                new \PHPStan\Type\Constant\ConstantStringType('endLine'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('startLine'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                                        new \PHPStan\Type\Constant\ConstantStringType('number'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createScan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                new \PHPStan\Type\Constant\ConstantStringType('scanName'),
                new \PHPStan\Type\Constant\ConstantStringType('scanNameArn'),
                new \PHPStan\Type\Constant\ConstantStringType('scanState'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('codeArtifactId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
            ]),
        ]);
    }
    private function createUploadUrl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('codeArtifactId'),
                new \PHPStan\Type\Constant\ConstantStringType('requestHeaders'),
                new \PHPStan\Type\Constant\ConstantStringType('s3Url'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAccountConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('encryptionConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('findings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorName'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('generatorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('remediation'),
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('vulnerability'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
                            new \PHPStan\Type\Constant\ConstantStringType('suggestedFixes'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('subResourceId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                            new \PHPStan\Type\Constant\ConstantStringType('High'),
                            new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                            new \PHPStan\Type\Constant\ConstantStringType('Low'),
                            new \PHPStan\Type\Constant\ConstantStringType('Info'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Closed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Open'),
                            new \PHPStan\Type\Constant\ConstantStringType('All'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('itemCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('referenceUrls'),
                            new \PHPStan\Type\Constant\ConstantStringType('relatedVulnerabilities'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('codeSnippet'),
                                new \PHPStan\Type\Constant\ConstantStringType('endLine'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('startLine'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                                        new \PHPStan\Type\Constant\ConstantStringType('number'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getMetricsSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('metricsSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('categoriesWithMostFindings'),
                    new \PHPStan\Type\Constant\ConstantStringType('date'),
                    new \PHPStan\Type\Constant\ConstantStringType('openFindings'),
                    new \PHPStan\Type\Constant\ConstantStringType('scansWithMostOpenCriticalFindings'),
                    new \PHPStan\Type\Constant\ConstantStringType('scansWithMostOpenFindings'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('categoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('findingNumber'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('critical'),
                        new \PHPStan\Type\Constant\ConstantStringType('high'),
                        new \PHPStan\Type\Constant\ConstantStringType('info'),
                        new \PHPStan\Type\Constant\ConstantStringType('low'),
                        new \PHPStan\Type\Constant\ConstantStringType('medium'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('findingNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('scanName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('findingNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('scanName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getScan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analysisType'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('numberOfRevisions'),
                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                new \PHPStan\Type\Constant\ConstantStringType('scanName'),
                new \PHPStan\Type\Constant\ConstantStringType('scanNameArn'),
                new \PHPStan\Type\Constant\ConstantStringType('scanState'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Security'),
                    new \PHPStan\Type\Constant\ConstantStringType('All'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function listFindingsMetrics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('findingsMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('closedFindings'),
                        new \PHPStan\Type\Constant\ConstantStringType('date'),
                        new \PHPStan\Type\Constant\ConstantStringType('meanTimeToClose'),
                        new \PHPStan\Type\Constant\ConstantStringType('newFindings'),
                        new \PHPStan\Type\Constant\ConstantStringType('openFindings'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('critical'),
                            new \PHPStan\Type\Constant\ConstantStringType('high'),
                            new \PHPStan\Type\Constant\ConstantStringType('info'),
                            new \PHPStan\Type\Constant\ConstantStringType('low'),
                            new \PHPStan\Type\Constant\ConstantStringType('medium'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('critical'),
                            new \PHPStan\Type\Constant\ConstantStringType('high'),
                            new \PHPStan\Type\Constant\ConstantStringType('info'),
                            new \PHPStan\Type\Constant\ConstantStringType('low'),
                            new \PHPStan\Type\Constant\ConstantStringType('medium'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('critical'),
                            new \PHPStan\Type\Constant\ConstantStringType('high'),
                            new \PHPStan\Type\Constant\ConstantStringType('info'),
                            new \PHPStan\Type\Constant\ConstantStringType('low'),
                            new \PHPStan\Type\Constant\ConstantStringType('medium'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('critical'),
                            new \PHPStan\Type\Constant\ConstantStringType('high'),
                            new \PHPStan\Type\Constant\ConstantStringType('info'),
                            new \PHPStan\Type\Constant\ConstantStringType('low'),
                            new \PHPStan\Type\Constant\ConstantStringType('medium'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listScans(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('summaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('runId'),
                        new \PHPStan\Type\Constant\ConstantStringType('scanName'),
                        new \PHPStan\Type\Constant\ConstantStringType('scanNameArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('scanState'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function updateAccountConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('encryptionConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}