<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class kendraClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\kendra\kendraClient>
     */
    public function getClass(): string
    {
        return \Aws\kendra\kendraClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateEntitiesToExperience',
            'associatePersonasToEntities',
            'batchDeleteDocument',
            'batchDeleteFeaturedResultsSet',
            'batchGetDocumentStatus',
            'batchPutDocument',
            'clearQuerySuggestions',
            'createAccessControlConfiguration',
            'createDataSource',
            'createExperience',
            'createFaq',
            'createFeaturedResultsSet',
            'createIndex',
            'createQuerySuggestionsBlockList',
            'createThesaurus',
            'deleteAccessControlConfiguration',
            'deleteDataSource',
            'deleteExperience',
            'deleteFaq',
            'deleteIndex',
            'deletePrincipalMapping',
            'deleteQuerySuggestionsBlockList',
            'deleteThesaurus',
            'describeAccessControlConfiguration',
            'describeDataSource',
            'describeExperience',
            'describeFaq',
            'describeFeaturedResultsSet',
            'describeIndex',
            'describePrincipalMapping',
            'describeQuerySuggestionsBlockList',
            'describeQuerySuggestionsConfig',
            'describeThesaurus',
            'disassociateEntitiesFromExperience',
            'disassociatePersonasFromEntities',
            'getQuerySuggestions',
            'getSnapshots',
            'listAccessControlConfigurations',
            'listDataSourceSyncJobs',
            'listDataSources',
            'listEntityPersonas',
            'listExperienceEntities',
            'listExperiences',
            'listFaqs',
            'listFeaturedResultsSets',
            'listGroupsOlderThanOrderingId',
            'listIndices',
            'listQuerySuggestionsBlockLists',
            'listTagsForResource',
            'listThesauri',
            'putPrincipalMapping',
            'query',
            'retrieve',
            'startDataSourceSyncJob',
            'stopDataSourceSyncJob',
            'submitFeedback',
            'tagResource',
            'untagResource',
            'updateAccessControlConfiguration',
            'updateDataSource',
            'updateExperience',
            'updateFeaturedResultsSet',
            'updateIndex',
            'updateQuerySuggestionsBlockList',
            'updateQuerySuggestionsConfig',
            'updateThesaurus',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateEntitiesToExperience' => $this->associateEntitiesToExperience(),
            'associatePersonasToEntities' => $this->associatePersonasToEntities(),
            'batchDeleteDocument' => $this->batchDeleteDocument(),
            'batchDeleteFeaturedResultsSet' => $this->batchDeleteFeaturedResultsSet(),
            'batchGetDocumentStatus' => $this->batchGetDocumentStatus(),
            'batchPutDocument' => $this->batchPutDocument(),
            'clearQuerySuggestions' => $this->clearQuerySuggestions(),
            'createAccessControlConfiguration' => $this->createAccessControlConfiguration(),
            'createDataSource' => $this->createDataSource(),
            'createExperience' => $this->createExperience(),
            'createFaq' => $this->createFaq(),
            'createFeaturedResultsSet' => $this->createFeaturedResultsSet(),
            'createIndex' => $this->createIndex(),
            'createQuerySuggestionsBlockList' => $this->createQuerySuggestionsBlockList(),
            'createThesaurus' => $this->createThesaurus(),
            'deleteAccessControlConfiguration' => $this->deleteAccessControlConfiguration(),
            'deleteDataSource' => $this->deleteDataSource(),
            'deleteExperience' => $this->deleteExperience(),
            'deleteFaq' => $this->deleteFaq(),
            'deleteIndex' => $this->deleteIndex(),
            'deletePrincipalMapping' => $this->deletePrincipalMapping(),
            'deleteQuerySuggestionsBlockList' => $this->deleteQuerySuggestionsBlockList(),
            'deleteThesaurus' => $this->deleteThesaurus(),
            'describeAccessControlConfiguration' => $this->describeAccessControlConfiguration(),
            'describeDataSource' => $this->describeDataSource(),
            'describeExperience' => $this->describeExperience(),
            'describeFaq' => $this->describeFaq(),
            'describeFeaturedResultsSet' => $this->describeFeaturedResultsSet(),
            'describeIndex' => $this->describeIndex(),
            'describePrincipalMapping' => $this->describePrincipalMapping(),
            'describeQuerySuggestionsBlockList' => $this->describeQuerySuggestionsBlockList(),
            'describeQuerySuggestionsConfig' => $this->describeQuerySuggestionsConfig(),
            'describeThesaurus' => $this->describeThesaurus(),
            'disassociateEntitiesFromExperience' => $this->disassociateEntitiesFromExperience(),
            'disassociatePersonasFromEntities' => $this->disassociatePersonasFromEntities(),
            'getQuerySuggestions' => $this->getQuerySuggestions(),
            'getSnapshots' => $this->getSnapshots(),
            'listAccessControlConfigurations' => $this->listAccessControlConfigurations(),
            'listDataSourceSyncJobs' => $this->listDataSourceSyncJobs(),
            'listDataSources' => $this->listDataSources(),
            'listEntityPersonas' => $this->listEntityPersonas(),
            'listExperienceEntities' => $this->listExperienceEntities(),
            'listExperiences' => $this->listExperiences(),
            'listFaqs' => $this->listFaqs(),
            'listFeaturedResultsSets' => $this->listFeaturedResultsSets(),
            'listGroupsOlderThanOrderingId' => $this->listGroupsOlderThanOrderingId(),
            'listIndices' => $this->listIndices(),
            'listQuerySuggestionsBlockLists' => $this->listQuerySuggestionsBlockLists(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listThesauri' => $this->listThesauri(),
            'putPrincipalMapping' => $this->putPrincipalMapping(),
            'query' => $this->query(),
            'retrieve' => $this->retrieve(),
            'startDataSourceSyncJob' => $this->startDataSourceSyncJob(),
            'stopDataSourceSyncJob' => $this->stopDataSourceSyncJob(),
            'submitFeedback' => $this->submitFeedback(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAccessControlConfiguration' => $this->updateAccessControlConfiguration(),
            'updateDataSource' => $this->updateDataSource(),
            'updateExperience' => $this->updateExperience(),
            'updateFeaturedResultsSet' => $this->updateFeaturedResultsSet(),
            'updateIndex' => $this->updateIndex(),
            'updateQuerySuggestionsBlockList' => $this->updateQuerySuggestionsBlockList(),
            'updateQuerySuggestionsConfig' => $this->updateQuerySuggestionsConfig(),
            'updateThesaurus' => $this->updateThesaurus(),
        };
    }
    private function associateEntitiesToExperience(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedEntityList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EntityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function associatePersonasToEntities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedEntityList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EntityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchDeleteDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedDocuments'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchDeleteFeaturedResultsSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchGetDocumentStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentStatusList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INDEXED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchPutDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedDocuments'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function clearQuerySuggestions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createAccessControlConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createExperience(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFaq(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFeaturedResultsSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FeaturedResultsSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FeaturedResultsSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FeaturedResultsSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryTexts'),
                    new \PHPStan\Type\Constant\ConstantStringType('FeaturedDocuments'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createQuerySuggestionsBlockList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createThesaurus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAccessControlConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteExperience(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteFaq(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deletePrincipalMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteQuerySuggestionsBlockList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteThesaurus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeAccessControlConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessControlList'),
                new \PHPStan\Type\Constant\ConstantStringType('HierarchicalAccessControlList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Access'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSourceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrincipalList'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Access'),
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                new \PHPStan\Type\Constant\ConstantStringType('CustomDocumentEnrichmentConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                    new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                    new \PHPStan\Type\Constant\ConstantStringType('DATABASE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONEDRIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SERVICENOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONFLUENCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('GOOGLEDRIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('WEBCRAWLER'),
                    new \PHPStan\Type\Constant\ConstantStringType('WORKDOCS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FSX'),
                    new \PHPStan\Type\Constant\ConstantStringType('SLACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('BOX'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUIP'),
                    new \PHPStan\Type\Constant\ConstantStringType('JIRA'),
                    new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALFRESCO'),
                    new \PHPStan\Type\Constant\ConstantStringType('TEMPLATE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SharePointConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SalesforceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('OneDriveConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceNowConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfluenceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('GoogleDriveConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('WebCrawlerConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkDocsConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('FsxConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SlackConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('BoxConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuipConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('JiraConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('GitHubConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlfrescoConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('InclusionPrefixes'),
                        new \PHPStan\Type\Constant\ConstantStringType('InclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentsMetadataConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessControlListConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPath'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SharePointVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Urls'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrawlAttachments'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseChangeLog'),
                        new \PHPStan\Type\Constant\ConstantStringType('InclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('FieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentTitleFieldName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisableLocalGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('SslCertificateS3Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProxyConfiguration'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT_2013'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT_2016'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT_ONLINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT_2019'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP_BASIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('OAUTH2'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Host'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseEngineType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('ColumnConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('AclConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('SqlConfiguration'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RDS_AURORA_MYSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('RDS_AURORA_POSTGRESQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('RDS_MYSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('RDS_POSTGRESQL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseHost'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabasePort'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentIdColumnName'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentDataColumnName'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentTitleColumnName'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldMappings'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChangeDetectingColumns'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedGroupsColumnName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('QueryIdentifiersEnclosingOption'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE_QUOTES'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServerUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('StandardObjectConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('KnowledgeArticleConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChatterFeedConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrawlAttachments'),
                        new \PHPStan\Type\Constant\ConstantStringType('StandardObjectAttachmentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeAttachmentFilePatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludeAttachmentFilePatterns'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('DocumentDataFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DocumentTitleFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldMappings'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CAMPAIGN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CASE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONTACT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONTRACT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IDEA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPPORTUNITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARTNER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRICEBOOK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRODUCT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROFILE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SOLUTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IncludedStates'),
                            new \PHPStan\Type\Constant\ConstantStringType('StandardKnowledgeArticleTypeConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomKnowledgeArticleTypeConfigurations'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DocumentDataFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DocumentTitleFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldMappings'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DocumentDataFieldName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DocumentTitleFieldName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FieldMappings'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentDataFieldName'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentTitleFieldName'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldMappings'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeFilterTypes'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_USER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_USER'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentTitleFieldName'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldMappings'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TenantDomain'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('OneDriveUsers'),
                        new \PHPStan\Type\Constant\ConstantStringType('InclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('FieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisableLocalGroups'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OneDriveUserList'),
                            new \PHPStan\Type\Constant\ConstantStringType('OneDriveUserS3Path'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HostUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceNowBuildVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('KnowledgeArticleConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceCatalogConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LONDON'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHERS'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CrawlAttachments'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeAttachmentFilePatterns'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExcludeAttachmentFilePatterns'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentDataFieldName'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentTitleFieldName'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldMappings'),
                            new \PHPStan\Type\Constant\ConstantStringType('FilterQuery'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CrawlAttachments'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeAttachmentFilePatterns'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExcludeAttachmentFilePatterns'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentDataFieldName'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentTitleFieldName'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldMappings'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP_BASIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('OAUTH2'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServerUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpaceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('PageConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('BlogConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('InclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProxyConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVER'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CrawlPersonalSpaces'),
                            new \PHPStan\Type\Constant\ConstantStringType('CrawlArchivedSpaces'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeSpaces'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExcludeSpaces'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpaceFieldMappings'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DISPLAY_URL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ITEM_TYPE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SPACE_KEY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PageFieldMappings'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AUTHOR'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTENT_STATUS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CREATED_DATE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISPLAY_URL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ITEM_TYPE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LABELS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MODIFIED_DATE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PARENT_ID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SPACE_KEY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SPACE_NAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VERSION'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BlogFieldMappings'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AUTHOR'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISPLAY_URL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ITEM_TYPE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LABELS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_DATE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SPACE_KEY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SPACE_NAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VERSION'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CrawlAttachments'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentFieldMappings'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AUTHOR'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTENT_TYPE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CREATED_DATE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISPLAY_URL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FILE_SIZE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ITEM_TYPE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PARENT_ID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SPACE_KEY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SPACE_NAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VERSION'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Host'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP_BASIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAT'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('InclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('FieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludeMimeTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludeUserAccounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludeSharedDrives'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Urls'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrawlDepth'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxLinksPerPage'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxContentSizePerPageInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxUrlsPerMinuteCrawlRate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UrlInclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('UrlExclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProxyConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SeedUrlConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('SiteMapsConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SeedUrls'),
                                new \PHPStan\Type\Constant\ConstantStringType('WebCrawlerMode'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HOST_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBDOMAINS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EVERYTHING'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SiteMaps'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Host'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BasicAuthentication'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Host'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrawlComments'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseChangeLog'),
                        new \PHPStan\Type\Constant\ConstantStringType('InclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('FieldMappings'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                        new \PHPStan\Type\Constant\ConstantStringType('FileSystemType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('InclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('FieldMappings'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TeamId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('SlackEntityList'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseChangeLog'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrawlBotMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludeArchived'),
                        new \PHPStan\Type\Constant\ConstantStringType('SinceCrawlDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookBackPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrivateChannelFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('PublicChannelFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('InclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('FieldMappings'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_CHANNEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_CHANNEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('GROUP_MESSAGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECT_MESSAGE'),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EnterpriseId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseChangeLog'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrawlComments'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrawlTasks'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrawlWebLinks'),
                        new \PHPStan\Type\Constant\ConstantStringType('FileFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('CommentFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('WebLinkFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('InclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrawlFileComments'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrawlChatRooms'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrawlAttachments'),
                        new \PHPStan\Type\Constant\ConstantStringType('FolderIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThreadFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('MessageFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('InclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JiraAccountUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseChangeLog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Project'),
                        new \PHPStan\Type\Constant\ConstantStringType('IssueType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('IssueSubEntityFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('CommentFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('IssueFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProjectFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkLogFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('InclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('COMMENTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('WORKLOGS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SaaSConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnPremiseConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseChangeLog'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubDocumentCrawlProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('RepositoryFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('InclusionFolderNamePatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('InclusionFileTypePatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('InclusionFileNamePatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExclusionFolderNamePatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExclusionFileTypePatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExclusionFileNamePatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubRepositoryConfigurationFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubCommitConfigurationFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubIssueDocumentConfigurationFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubIssueCommentConfigurationFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubIssueAttachmentConfigurationFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubPullRequestCommentConfigurationFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubPullRequestDocumentConfigurationFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubPullRequestDocumentAttachmentConfigurationFieldMappings'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OrganizationName'),
                            new \PHPStan\Type\Constant\ConstantStringType('HostUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HostUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('OrganizationName'),
                            new \PHPStan\Type\Constant\ConstantStringType('SslCertificateS3Path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SAAS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ON_PREMISE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CrawlRepositoryDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('CrawlIssue'),
                            new \PHPStan\Type\Constant\ConstantStringType('CrawlIssueComment'),
                            new \PHPStan\Type\Constant\ConstantStringType('CrawlIssueCommentAttachment'),
                            new \PHPStan\Type\Constant\ConstantStringType('CrawlPullRequest'),
                            new \PHPStan\Type\Constant\ConstantStringType('CrawlPullRequestComment'),
                            new \PHPStan\Type\Constant\ConstantStringType('CrawlPullRequestCommentAttachment'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SiteUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SslCertificateS3Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrawlSystemFolders'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrawlComments'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntityFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentLibraryFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('BlogFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('WikiFieldMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('InclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExclusionPatterns'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('wiki'),
                                new \PHPStan\Type\Constant\ConstantStringType('blog'),
                                new \PHPStan\Type\Constant\ConstantStringType('documentLibrary'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSourceFieldName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateFieldFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Template'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InlineConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreExtractionHookConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostExtractionHookConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                            new \PHPStan\Type\Constant\ConstantStringType('Target'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentContentDeletion'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConditionDocumentAttributeKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConditionOnValue'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEquals'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEquals'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Equals'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NotEquals'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Contains'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NotContains'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Exists'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NotExists'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BeginsWith'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StringListValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LongValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DateValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TargetDocumentAttributeKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetDocumentAttributeValueDeletion'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetDocumentAttributeValue'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StringListValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LongValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DateValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InvocationCondition'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConditionDocumentAttributeKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConditionOnValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEquals'),
                                new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEquals'),
                                new \PHPStan\Type\Constant\ConstantStringType('Equals'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotEquals'),
                                new \PHPStan\Type\Constant\ConstantStringType('Contains'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotContains'),
                                new \PHPStan\Type\Constant\ConstantStringType('Exists'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotExists'),
                                new \PHPStan\Type\Constant\ConstantStringType('BeginsWith'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('StringListValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('LongValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateValue'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InvocationCondition'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConditionDocumentAttributeKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConditionOnValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEquals'),
                                new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEquals'),
                                new \PHPStan\Type\Constant\ConstantStringType('Equals'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotEquals'),
                                new \PHPStan\Type\Constant\ConstantStringType('Contains'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotContains'),
                                new \PHPStan\Type\Constant\ConstantStringType('Exists'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotExists'),
                                new \PHPStan\Type\Constant\ConstantStringType('BeginsWith'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('StringListValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('LongValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateValue'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeExperience(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('HOME'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ContentSourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserIdentityConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataSourceIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('FaqIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('DirectPutContent'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityAttributeName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeFaq(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('S3Path'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('FileFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                    new \PHPStan\Type\Constant\ConstantStringType('CSV_WITH_HEADER'),
                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeFeaturedResultsSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FeaturedResultsSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('FeaturedResultsSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryTexts'),
                new \PHPStan\Type\Constant\ConstantStringType('FeaturedDocumentsWithMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('FeaturedDocumentsMissing'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('URI'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Edition'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerSideEncryptionConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentMetadataConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexStatistics'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                new \PHPStan\Type\Constant\ConstantStringType('UserTokenConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('UserContextPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('UserGroupResolutionConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEVELOPER_EDITION'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE_EDITION'),
                    new \PHPStan\Type\Constant\ConstantStringType('GEN_AI_ENTERPRISE_EDITION'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_UPDATING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Relevance'),
                        new \PHPStan\Type\Constant\ConstantStringType('Search'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STRING_VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRING_LIST_VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LONG_VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE_VALUE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Freshness'),
                            new \PHPStan\Type\Constant\ConstantStringType('Importance'),
                            new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                            new \PHPStan\Type\Constant\ConstantStringType('RankOrder'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValueImportanceMap'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ASCENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DESCENDING'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Facetable'),
                            new \PHPStan\Type\Constant\ConstantStringType('Searchable'),
                            new \PHPStan\Type\Constant\ConstantStringType('Displayable'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sortable'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FaqStatistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('TextDocumentStatistics'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IndexedQuestionAnswersCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IndexedTextDocumentsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('IndexedTextBytes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StorageCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryCapacityUnits'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JwtTokenTypeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('JsonTokenTypeConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretManagerArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserNameAttributeField'),
                            new \PHPStan\Type\Constant\ConstantStringType('GroupAttributeField'),
                            new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClaimRegex'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECRET_MANAGER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserNameAttributeField'),
                            new \PHPStan\Type\Constant\ConstantStringType('GroupAttributeField'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE_FILTER'),
                    new \PHPStan\Type\Constant\ConstantStringType('USER_TOKEN'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupResolutionMode'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SSO'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describePrincipalMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IndexId'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('GroupOrderingIdSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReceivedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrderingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeQuerySuggestionsBlockList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IndexId'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceS3Path'),
                new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSizeBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_BUT_UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeQuerySuggestionsConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryLogLookBackWindowInDays'),
                new \PHPStan\Type\Constant\ConstantStringType('IncludeQueriesWithoutUserInformation'),
                new \PHPStan\Type\Constant\ConstantStringType('MinimumNumberOfQueryingUsers'),
                new \PHPStan\Type\Constant\ConstantStringType('MinimumQueryCount'),
                new \PHPStan\Type\Constant\ConstantStringType('LastSuggestionsBuildTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastClearTime'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalSuggestionsCount'),
                new \PHPStan\Type\Constant\ConstantStringType('AttributeSuggestionsConfig'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('LEARN_ONLY'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SuggestableConfigList'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeSuggestionsMode'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Suggestable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeThesaurus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceS3Path'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSizeBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('TermCount'),
                new \PHPStan\Type\Constant\ConstantStringType('SynonymRuleCount'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_BUT_UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function disassociateEntitiesFromExperience(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedEntityList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EntityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function disassociatePersonasFromEntities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedEntityList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EntityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getQuerySuggestions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QuerySuggestionsId'),
                new \PHPStan\Type\Constant\ConstantStringType('Suggestions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceDocuments'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                new \PHPStan\Type\Constant\ConstantStringType('Highlights'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DocumentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('SuggestionAttributes'),
                                new \PHPStan\Type\Constant\ConstantStringType('AdditionalAttributes'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('StringListValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LongValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DateValue'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        ]),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getSnapshots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SnapShotTimeFilter'),
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotsDataHeader'),
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotsData'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAccessControlConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessControlConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listDataSourceSyncJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('History'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSourceErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNCING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INCOMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNCING_INDEXING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentsAdded'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentsModified'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentsDeleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentsFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentsScanned'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDataSources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SummaryItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATABASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONEDRIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICENOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLUENCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GOOGLEDRIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEBCRAWLER'),
                            new \PHPStan\Type\Constant\ConstantStringType('WORKDOCS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FSX'),
                            new \PHPStan\Type\Constant\ConstantStringType('SLACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOX'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUIP'),
                            new \PHPStan\Type\Constant\ConstantStringType('JIRA'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALFRESCO'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEMPLATE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEntityPersonas(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SummaryItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EntityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Persona'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OWNER'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIEWER'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listExperienceEntities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SummaryItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EntityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntityType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayData'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                            new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentifiedUserName'),
                            new \PHPStan\Type\Constant\ConstantStringType('FirstName'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listExperiences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SummaryItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('HOME'),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFaqs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('FaqSummaryItems'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('FileFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                            new \PHPStan\Type\Constant\ConstantStringType('CSV_WITH_HEADER'),
                            new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listFeaturedResultsSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FeaturedResultsSetSummaryItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FeaturedResultsSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('FeaturedResultsSetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGroupsOlderThanOrderingId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GroupsSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrderingId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIndices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IndexConfigurationSummaryItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Edition'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEVELOPER_EDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE_EDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('GEN_AI_ENTERPRISE_EDITION'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_UPDATING'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listQuerySuggestionsBlockLists(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BlockListSummaryItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_BUT_UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listThesauri(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ThesaurusSummaryItems'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_BUT_UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function putPrincipalMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function query(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryId'),
                new \PHPStan\Type\Constant\ConstantStringType('ResultItems'),
                new \PHPStan\Type\Constant\ConstantStringType('FacetResults'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfResults'),
                new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
                new \PHPStan\Type\Constant\ConstantStringType('SpellCorrectedQueries'),
                new \PHPStan\Type\Constant\ConstantStringType('FeaturedResultsItems'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Format'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentTitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentExcerpt'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentURI'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScoreAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('FeedbackToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableExcerpt'),
                        new \PHPStan\Type\Constant\ConstantStringType('CollapsedResultDetail'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUESTION_ANSWER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANSWER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXT_WITH_HIGHLIGHTS_VALUE'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TextWithHighlightsValue'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Highlights'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TopAnswer'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\BooleanType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('THESAURUS_SYNONYM'),
                                                ]),
                                            ]),
                                        ])),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Highlights'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TopAnswer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('THESAURUS_SYNONYM'),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Highlights'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TopAnswer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('THESAURUS_SYNONYM'),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StringListValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LongValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DateValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ScoreConfidence'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VERY_HIGH'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Rows'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfRows'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Cells'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TopAnswer'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Highlighted'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Header'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentAttribute'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExpandedResults'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StringListValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LongValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DateValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DocumentId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DocumentTitle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DocumentExcerpt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DocumentURI'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DocumentAttributes'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Highlights'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TopAnswer'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\BooleanType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('THESAURUS_SYNONYM'),
                                                ]),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Highlights'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TopAnswer'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\BooleanType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('THESAURUS_SYNONYM'),
                                                ]),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('StringListValue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LongValue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DateValue'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            ]),
                                        ]),
                                    ])),
                                ]),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentAttributeKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentAttributeValueType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentAttributeValueCountPairs'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STRING_VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRING_LIST_VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LONG_VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE_VALUE'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DocumentAttributeValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                new \PHPStan\Type\Constant\ConstantStringType('FacetResults'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StringListValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LongValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DateValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\MixedType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY_LANGUAGE_INVALID_SYNTAX'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SuggestedQueryText'),
                        new \PHPStan\Type\Constant\ConstantStringType('Corrections'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('Term'),
                                new \PHPStan\Type\Constant\ConstantStringType('CorrectedTerm'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentTitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentExcerpt'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentURI'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('FeedbackToken'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUESTION_ANSWER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANSWER'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXT_WITH_HIGHLIGHTS_VALUE'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TextWithHighlightsValue'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Highlights'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TopAnswer'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\BooleanType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('THESAURUS_SYNONYM'),
                                                ]),
                                            ]),
                                        ])),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Highlights'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TopAnswer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('THESAURUS_SYNONYM'),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Highlights'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TopAnswer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('THESAURUS_SYNONYM'),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StringListValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LongValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DateValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function retrieve(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryId'),
                new \PHPStan\Type\Constant\ConstantStringType('ResultItems'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentTitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentURI'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScoreAttributes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StringListValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LongValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DateValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ScoreConfidence'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VERY_HIGH'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                            ]),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function startDataSourceSyncJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopDataSourceSyncJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function submitFeedback(): ?\PHPStan\Type\Type
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
    private function updateAccessControlConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateExperience(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateFeaturedResultsSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FeaturedResultsSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FeaturedResultsSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FeaturedResultsSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryTexts'),
                    new \PHPStan\Type\Constant\ConstantStringType('FeaturedDocuments'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function updateIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateQuerySuggestionsBlockList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateQuerySuggestionsConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateThesaurus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}