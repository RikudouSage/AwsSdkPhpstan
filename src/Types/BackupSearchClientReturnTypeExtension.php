<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class BackupSearchClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\BackupSearch\BackupSearchClient>
     */
    public function getClass(): string
    {
        return \Aws\BackupSearch\BackupSearchClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'getSearchJob',
            'getSearchResultExportJob',
            'listSearchJobBackups',
            'listSearchJobResults',
            'listSearchJobs',
            'listSearchResultExportJobs',
            'listTagsForResource',
            'startSearchJob',
            'startSearchResultExportJob',
            'stopSearchJob',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'getSearchJob' => $this->getSearchJob(),
            'getSearchResultExportJob' => $this->getSearchResultExportJob(),
            'listSearchJobBackups' => $this->listSearchJobBackups(),
            'listSearchJobResults' => $this->listSearchJobResults(),
            'listSearchJobs' => $this->listSearchJobs(),
            'listSearchResultExportJobs' => $this->listSearchResultExportJobs(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startSearchJob' => $this->startSearchJob(),
            'startSearchResultExportJob' => $this->startSearchResultExportJob(),
            'stopSearchJob' => $this->stopSearchJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function getSearchJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('SearchScopeSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentSearchProgress'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletionTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('SearchScope'),
                new \PHPStan\Type\Constant\ConstantStringType('ItemFilters'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SearchJobIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('SearchJobArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TotalRecoveryPointsToScanCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalItemsToScanCount'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointsScannedCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ItemsScannedCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ItemsMatchedCount'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupResourceTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupResourceCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceResourceArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupResourceArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupResourceTags'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('EBS'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAfter'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedBefore'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3ItemFilters'),
                    new \PHPStan\Type\Constant\ConstantStringType('EBSItemFilters'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectKeys'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sizes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTimes'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETags'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOES_NOT_CONTAIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOES_NOT_BEGIN_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOES_NOT_END_WITH'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_EQUAL_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_EQUAL_TO'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_EQUAL_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_EQUAL_TO'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOES_NOT_CONTAIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOES_NOT_BEGIN_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOES_NOT_END_WITH'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOES_NOT_CONTAIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOES_NOT_BEGIN_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOES_NOT_END_WITH'),
                            ]),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FilePaths'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sizes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTimes'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationTimes'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOES_NOT_CONTAIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOES_NOT_BEGIN_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOES_NOT_END_WITH'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_EQUAL_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_EQUAL_TO'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_EQUAL_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_EQUAL_TO'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_EQUAL_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_EQUAL_TO'),
                            ]),
                        ])),
                    ])),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSearchResultExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExportJobIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportJobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletionTime'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportSpecification'),
                new \PHPStan\Type\Constant\ConstantStringType('SearchJobArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3ExportSpecification'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationBucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationPrefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSearchJobBackups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IndexCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupCreationTime'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('EBS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSearchJobResults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3ResultItem'),
                    new \PHPStan\Type\Constant\ConstantStringType('EBSResultItem'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BackupResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BackupResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                        new \PHPStan\Type\Constant\ConstantStringType('FileSystemIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('FilePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('FileSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSearchJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SearchJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SearchJobIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SearchJobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SearchScopeSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalRecoveryPointsToScanCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalItemsToScanCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSearchResultExportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExportJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExportJobIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportJobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('SearchJobArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function startSearchJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SearchJobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SearchJobIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startSearchResultExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExportJobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportJobIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopSearchJob(): ?\PHPStan\Type\Type
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