<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CleanRoomsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CleanRooms\CleanRoomsClient>
     */
    public function getClass(): string
    {
        return \Aws\CleanRooms\CleanRoomsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchGetCollaborationAnalysisTemplate',
            'batchGetSchema',
            'batchGetSchemaAnalysisRule',
            'createAnalysisTemplate',
            'createCollaboration',
            'createConfiguredAudienceModelAssociation',
            'createConfiguredTable',
            'createConfiguredTableAnalysisRule',
            'createConfiguredTableAssociation',
            'createConfiguredTableAssociationAnalysisRule',
            'createIdMappingTable',
            'createIdNamespaceAssociation',
            'createMembership',
            'createPrivacyBudgetTemplate',
            'deleteAnalysisTemplate',
            'deleteCollaboration',
            'deleteConfiguredAudienceModelAssociation',
            'deleteConfiguredTable',
            'deleteConfiguredTableAnalysisRule',
            'deleteConfiguredTableAssociation',
            'deleteConfiguredTableAssociationAnalysisRule',
            'deleteIdMappingTable',
            'deleteIdNamespaceAssociation',
            'deleteMember',
            'deleteMembership',
            'deletePrivacyBudgetTemplate',
            'getAnalysisTemplate',
            'getCollaboration',
            'getCollaborationAnalysisTemplate',
            'getCollaborationConfiguredAudienceModelAssociation',
            'getCollaborationIdNamespaceAssociation',
            'getCollaborationPrivacyBudgetTemplate',
            'getConfiguredAudienceModelAssociation',
            'getConfiguredTable',
            'getConfiguredTableAnalysisRule',
            'getConfiguredTableAssociation',
            'getConfiguredTableAssociationAnalysisRule',
            'getIdMappingTable',
            'getIdNamespaceAssociation',
            'getMembership',
            'getPrivacyBudgetTemplate',
            'getProtectedQuery',
            'getSchema',
            'getSchemaAnalysisRule',
            'listAnalysisTemplates',
            'listCollaborationAnalysisTemplates',
            'listCollaborationConfiguredAudienceModelAssociations',
            'listCollaborationIdNamespaceAssociations',
            'listCollaborationPrivacyBudgetTemplates',
            'listCollaborationPrivacyBudgets',
            'listCollaborations',
            'listConfiguredAudienceModelAssociations',
            'listConfiguredTableAssociations',
            'listConfiguredTables',
            'listIdMappingTables',
            'listIdNamespaceAssociations',
            'listMembers',
            'listMemberships',
            'listPrivacyBudgetTemplates',
            'listPrivacyBudgets',
            'listProtectedQueries',
            'listSchemas',
            'listTagsForResource',
            'populateIdMappingTable',
            'previewPrivacyImpact',
            'startProtectedQuery',
            'tagResource',
            'untagResource',
            'updateAnalysisTemplate',
            'updateCollaboration',
            'updateConfiguredAudienceModelAssociation',
            'updateConfiguredTable',
            'updateConfiguredTableAnalysisRule',
            'updateConfiguredTableAssociation',
            'updateConfiguredTableAssociationAnalysisRule',
            'updateIdMappingTable',
            'updateIdNamespaceAssociation',
            'updateMembership',
            'updatePrivacyBudgetTemplate',
            'updateProtectedQuery',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchGetCollaborationAnalysisTemplate' => $this->batchGetCollaborationAnalysisTemplate(),
            'batchGetSchema' => $this->batchGetSchema(),
            'batchGetSchemaAnalysisRule' => $this->batchGetSchemaAnalysisRule(),
            'createAnalysisTemplate' => $this->createAnalysisTemplate(),
            'createCollaboration' => $this->createCollaboration(),
            'createConfiguredAudienceModelAssociation' => $this->createConfiguredAudienceModelAssociation(),
            'createConfiguredTable' => $this->createConfiguredTable(),
            'createConfiguredTableAnalysisRule' => $this->createConfiguredTableAnalysisRule(),
            'createConfiguredTableAssociation' => $this->createConfiguredTableAssociation(),
            'createConfiguredTableAssociationAnalysisRule' => $this->createConfiguredTableAssociationAnalysisRule(),
            'createIdMappingTable' => $this->createIdMappingTable(),
            'createIdNamespaceAssociation' => $this->createIdNamespaceAssociation(),
            'createMembership' => $this->createMembership(),
            'createPrivacyBudgetTemplate' => $this->createPrivacyBudgetTemplate(),
            'deleteAnalysisTemplate' => $this->deleteAnalysisTemplate(),
            'deleteCollaboration' => $this->deleteCollaboration(),
            'deleteConfiguredAudienceModelAssociation' => $this->deleteConfiguredAudienceModelAssociation(),
            'deleteConfiguredTable' => $this->deleteConfiguredTable(),
            'deleteConfiguredTableAnalysisRule' => $this->deleteConfiguredTableAnalysisRule(),
            'deleteConfiguredTableAssociation' => $this->deleteConfiguredTableAssociation(),
            'deleteConfiguredTableAssociationAnalysisRule' => $this->deleteConfiguredTableAssociationAnalysisRule(),
            'deleteIdMappingTable' => $this->deleteIdMappingTable(),
            'deleteIdNamespaceAssociation' => $this->deleteIdNamespaceAssociation(),
            'deleteMember' => $this->deleteMember(),
            'deleteMembership' => $this->deleteMembership(),
            'deletePrivacyBudgetTemplate' => $this->deletePrivacyBudgetTemplate(),
            'getAnalysisTemplate' => $this->getAnalysisTemplate(),
            'getCollaboration' => $this->getCollaboration(),
            'getCollaborationAnalysisTemplate' => $this->getCollaborationAnalysisTemplate(),
            'getCollaborationConfiguredAudienceModelAssociation' => $this->getCollaborationConfiguredAudienceModelAssociation(),
            'getCollaborationIdNamespaceAssociation' => $this->getCollaborationIdNamespaceAssociation(),
            'getCollaborationPrivacyBudgetTemplate' => $this->getCollaborationPrivacyBudgetTemplate(),
            'getConfiguredAudienceModelAssociation' => $this->getConfiguredAudienceModelAssociation(),
            'getConfiguredTable' => $this->getConfiguredTable(),
            'getConfiguredTableAnalysisRule' => $this->getConfiguredTableAnalysisRule(),
            'getConfiguredTableAssociation' => $this->getConfiguredTableAssociation(),
            'getConfiguredTableAssociationAnalysisRule' => $this->getConfiguredTableAssociationAnalysisRule(),
            'getIdMappingTable' => $this->getIdMappingTable(),
            'getIdNamespaceAssociation' => $this->getIdNamespaceAssociation(),
            'getMembership' => $this->getMembership(),
            'getPrivacyBudgetTemplate' => $this->getPrivacyBudgetTemplate(),
            'getProtectedQuery' => $this->getProtectedQuery(),
            'getSchema' => $this->getSchema(),
            'getSchemaAnalysisRule' => $this->getSchemaAnalysisRule(),
            'listAnalysisTemplates' => $this->listAnalysisTemplates(),
            'listCollaborationAnalysisTemplates' => $this->listCollaborationAnalysisTemplates(),
            'listCollaborationConfiguredAudienceModelAssociations' => $this->listCollaborationConfiguredAudienceModelAssociations(),
            'listCollaborationIdNamespaceAssociations' => $this->listCollaborationIdNamespaceAssociations(),
            'listCollaborationPrivacyBudgetTemplates' => $this->listCollaborationPrivacyBudgetTemplates(),
            'listCollaborationPrivacyBudgets' => $this->listCollaborationPrivacyBudgets(),
            'listCollaborations' => $this->listCollaborations(),
            'listConfiguredAudienceModelAssociations' => $this->listConfiguredAudienceModelAssociations(),
            'listConfiguredTableAssociations' => $this->listConfiguredTableAssociations(),
            'listConfiguredTables' => $this->listConfiguredTables(),
            'listIdMappingTables' => $this->listIdMappingTables(),
            'listIdNamespaceAssociations' => $this->listIdNamespaceAssociations(),
            'listMembers' => $this->listMembers(),
            'listMemberships' => $this->listMemberships(),
            'listPrivacyBudgetTemplates' => $this->listPrivacyBudgetTemplates(),
            'listPrivacyBudgets' => $this->listPrivacyBudgets(),
            'listProtectedQueries' => $this->listProtectedQueries(),
            'listSchemas' => $this->listSchemas(),
            'listTagsForResource' => $this->listTagsForResource(),
            'populateIdMappingTable' => $this->populateIdMappingTable(),
            'previewPrivacyImpact' => $this->previewPrivacyImpact(),
            'startProtectedQuery' => $this->startProtectedQuery(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAnalysisTemplate' => $this->updateAnalysisTemplate(),
            'updateCollaboration' => $this->updateCollaboration(),
            'updateConfiguredAudienceModelAssociation' => $this->updateConfiguredAudienceModelAssociation(),
            'updateConfiguredTable' => $this->updateConfiguredTable(),
            'updateConfiguredTableAnalysisRule' => $this->updateConfiguredTableAnalysisRule(),
            'updateConfiguredTableAssociation' => $this->updateConfiguredTableAssociation(),
            'updateConfiguredTableAssociationAnalysisRule' => $this->updateConfiguredTableAssociationAnalysisRule(),
            'updateIdMappingTable' => $this->updateIdMappingTable(),
            'updateIdNamespaceAssociation' => $this->updateIdNamespaceAssociation(),
            'updateMembership' => $this->updateMembership(),
            'updatePrivacyBudgetTemplate' => $this->updatePrivacyBudgetTemplate(),
            'updateProtectedQuery' => $this->updateProtectedQuery(),
        };
    }
    private function batchGetCollaborationAnalysisTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('collaborationAnalysisTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('validations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('referencedTables'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMALLINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                            new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DECIMAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('REAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE_PRECISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMPTZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMETZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('VARBYTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BYTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHARACTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                            new \PHPStan\Type\Constant\ConstantStringType('NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHORT'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP_LTZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP_NTZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TINYINT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reasons'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNABLE_TO_VALIDATE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchGetSchema(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('schemas'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('columns'),
                    new \PHPStan\Type\Constant\ConstantStringType('partitionKeys'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisRuleTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaStatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaTypeProperties'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID_MAPPING_TABLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_QUERY'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID_MAPPING_TABLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reasons'),
                        new \PHPStan\Type\Constant\ConstantStringType('analysisRuleType'),
                        new \PHPStan\Type\Constant\ConstantStringType('configurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('analysisType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_RULE_MISSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_TEMPLATES_NOT_CONFIGURED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_PROVIDERS_NOT_CONFIGURED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY_POLICY_NOT_CONFIGURED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ID_MAPPING_TABLE_NOT_POPULATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('COLLABORATION_ANALYSIS_RULE_NOT_CONFIGURED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ADDITIONAL_ANALYSES_NOT_CONFIGURED'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESULT_RECEIVERS_NOT_CONFIGURED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ADDITIONAL_ANALYSES_NOT_ALLOWED'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESULT_RECEIVERS_NOT_ALLOWED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_RULE_TYPES_NOT_COMPATIBLE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('ID_MAPPING_TABLE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT_ANALYSIS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITIONAL_ANALYSIS'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('idMappingTable'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('idMappingTableInputSource'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idNamespaceAssociationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                                ]),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchGetSchemaAnalysisRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analysisRules'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID_MAPPING_TABLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('v1'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('list'),
                            new \PHPStan\Type\Constant\ConstantStringType('aggregation'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                            new \PHPStan\Type\Constant\ConstantStringType('idMappingTable'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('joinColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedJoinOperators'),
                                new \PHPStan\Type\Constant\ConstantStringType('listColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalAnalyses'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AND'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('aggregateColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('joinColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('joinRequired'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedJoinOperators'),
                                new \PHPStan\Type\Constant\ConstantStringType('dimensionColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('scalarFunctions'),
                                new \PHPStan\Type\Constant\ConstantStringType('outputConstraints'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalAnalyses'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnNames'),
                                    new \PHPStan\Type\Constant\ConstantStringType('function'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SUM_DISTINCT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COUNT_DISTINCT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AVG'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_RUNNER'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AND'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ABS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CAST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CEILING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COALESCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CURRENT_DATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATEADD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXTRACT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FLOOR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GETDATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOWER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RTRIM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQRT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBSTRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_CHAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_DATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_NUMBER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_TIMESTAMP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRIM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRUNC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPPER'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('minimum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('COUNT_DISTINCT'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAnalyses'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAnalysisProviders'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalAnalyses'),
                                new \PHPStan\Type\Constant\ConstantStringType('disallowedOutputColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('differentialPrivacy'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columns'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('joinColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryConstraints'),
                                new \PHPStan\Type\Constant\ConstantStringType('dimensionColumns'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('requireOverlap'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('columns'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID_MAPPING_TABLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createAnalysisTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analysisTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('validations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('referencedTables'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMALLINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                            new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DECIMAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('REAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE_PRECISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMPTZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMETZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('VARBYTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BYTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHARACTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                            new \PHPStan\Type\Constant\ConstantStringType('NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHORT'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP_LTZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP_NTZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TINYINT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reasons'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNABLE_TO_VALIDATE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createCollaboration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('collaboration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('memberStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataEncryptionMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('queryLogStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('analyticsEngine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LEFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowCleartext'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowDuplicates'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowJoinsOnColumnsWithDifferentNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('preserveNulls'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SPARK'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLEAN_ROOMS_SQL'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createConfiguredAudienceModelAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('manageResourcePolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createConfiguredTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredTable'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('tableReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisRuleTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('allowedColumns'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('glue'),
                        new \PHPStan\Type\Constant\ConstantStringType('snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('athena'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('secretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('accountIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                            new \PHPStan\Type\Constant\ConstantStringType('tableSchema'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('v1'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('columnType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_QUERY'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createConfiguredTableAnalysisRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analysisRule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('v1'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('list'),
                            new \PHPStan\Type\Constant\ConstantStringType('aggregation'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('joinColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedJoinOperators'),
                                new \PHPStan\Type\Constant\ConstantStringType('listColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalAnalyses'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AND'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('aggregateColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('joinColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('joinRequired'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedJoinOperators'),
                                new \PHPStan\Type\Constant\ConstantStringType('dimensionColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('scalarFunctions'),
                                new \PHPStan\Type\Constant\ConstantStringType('outputConstraints'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalAnalyses'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnNames'),
                                    new \PHPStan\Type\Constant\ConstantStringType('function'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SUM_DISTINCT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COUNT_DISTINCT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AVG'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_RUNNER'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AND'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ABS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CAST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CEILING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COALESCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CURRENT_DATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATEADD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXTRACT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FLOOR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GETDATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOWER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RTRIM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQRT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBSTRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_CHAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_DATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_NUMBER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_TIMESTAMP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRIM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRUNC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPPER'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('minimum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('COUNT_DISTINCT'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAnalyses'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAnalysisProviders'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalAnalyses'),
                                new \PHPStan\Type\Constant\ConstantStringType('disallowedOutputColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('differentialPrivacy'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columns'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createConfiguredTableAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredTableAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisRuleTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createConfiguredTableAssociationAnalysisRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analysisRule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableAssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('v1'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('list'),
                            new \PHPStan\Type\Constant\ConstantStringType('aggregation'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedResultReceivers'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAdditionalAnalyses'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedResultReceivers'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAdditionalAnalyses'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedResultReceivers'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAdditionalAnalyses'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createIdMappingTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('idMappingTable'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('inputReferenceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('manageResourcePolicies'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('idMappingTableInputSource'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('idNamespaceAssociationId'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createIdNamespaceAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('idNamespaceAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('idMappingConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('inputReferenceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('manageResourcePolicies'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('idNamespaceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('idMappingWorkflowsSupported'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowUseAsDimensionColumn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('membership'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationCreatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationCreatorDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('memberAbilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('mlMemberAbilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('queryLogStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultResultConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('paymentConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COLLABORATION_DELETED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CAN_QUERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAN_RECEIVE_RESULTS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('customMLMemberAbilities'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CAN_RECEIVE_MODEL_OUTPUT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CAN_RECEIVE_INFERENCE_OUTPUT'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outputConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('resultFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('keyPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('singleFileOutput'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('queryCompute'),
                        new \PHPStan\Type\Constant\ConstantStringType('machineLearning'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('isResponsible'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('modelTraining'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelInference'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isResponsible'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isResponsible'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createPrivacyBudgetTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('privacyBudgetTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('privacyBudgetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRefresh'),
                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CALENDAR_MONTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('differentialPrivacy'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('epsilon'),
                            new \PHPStan\Type\Constant\ConstantStringType('usersNoisePerQuery'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteAnalysisTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteCollaboration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteConfiguredAudienceModelAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteConfiguredTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteConfiguredTableAnalysisRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteConfiguredTableAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteConfiguredTableAssociationAnalysisRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteIdMappingTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteIdNamespaceAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteMember(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePrivacyBudgetTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAnalysisTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analysisTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('validations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('referencedTables'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMALLINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                            new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DECIMAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('REAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE_PRECISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMPTZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMETZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('VARBYTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BYTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHARACTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                            new \PHPStan\Type\Constant\ConstantStringType('NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHORT'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP_LTZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP_NTZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TINYINT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reasons'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNABLE_TO_VALIDATE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getCollaboration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('collaboration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('memberStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataEncryptionMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('queryLogStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('analyticsEngine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LEFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowCleartext'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowDuplicates'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowJoinsOnColumnsWithDifferentNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('preserveNulls'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SPARK'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLEAN_ROOMS_SQL'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getCollaborationAnalysisTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('collaborationAnalysisTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('validations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('referencedTables'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMALLINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                            new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DECIMAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('REAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE_PRECISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMPTZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMETZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('VARBYTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BYTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHARACTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                            new \PHPStan\Type\Constant\ConstantStringType('NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHORT'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP_LTZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP_NTZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TINYINT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reasons'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNABLE_TO_VALIDATE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getCollaborationConfiguredAudienceModelAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('collaborationConfiguredAudienceModelAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getCollaborationIdNamespaceAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('collaborationIdNamespaceAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('idMappingConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('inputReferenceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('manageResourcePolicies'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('idNamespaceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('idMappingWorkflowsSupported'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowUseAsDimensionColumn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getCollaborationPrivacyBudgetTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('collaborationPrivacyBudgetTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('privacyBudgetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRefresh'),
                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CALENDAR_MONTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('differentialPrivacy'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('epsilon'),
                            new \PHPStan\Type\Constant\ConstantStringType('usersNoisePerQuery'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getConfiguredAudienceModelAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('manageResourcePolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getConfiguredTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredTable'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('tableReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisRuleTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('allowedColumns'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('glue'),
                        new \PHPStan\Type\Constant\ConstantStringType('snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('athena'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('secretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('accountIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                            new \PHPStan\Type\Constant\ConstantStringType('tableSchema'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('v1'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('columnType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_QUERY'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getConfiguredTableAnalysisRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analysisRule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('v1'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('list'),
                            new \PHPStan\Type\Constant\ConstantStringType('aggregation'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('joinColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedJoinOperators'),
                                new \PHPStan\Type\Constant\ConstantStringType('listColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalAnalyses'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AND'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('aggregateColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('joinColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('joinRequired'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedJoinOperators'),
                                new \PHPStan\Type\Constant\ConstantStringType('dimensionColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('scalarFunctions'),
                                new \PHPStan\Type\Constant\ConstantStringType('outputConstraints'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalAnalyses'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnNames'),
                                    new \PHPStan\Type\Constant\ConstantStringType('function'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SUM_DISTINCT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COUNT_DISTINCT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AVG'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_RUNNER'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AND'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ABS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CAST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CEILING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COALESCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CURRENT_DATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATEADD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXTRACT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FLOOR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GETDATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOWER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RTRIM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQRT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBSTRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_CHAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_DATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_NUMBER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_TIMESTAMP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRIM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRUNC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPPER'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('minimum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('COUNT_DISTINCT'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAnalyses'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAnalysisProviders'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalAnalyses'),
                                new \PHPStan\Type\Constant\ConstantStringType('disallowedOutputColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('differentialPrivacy'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columns'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getConfiguredTableAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredTableAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisRuleTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getConfiguredTableAssociationAnalysisRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analysisRule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableAssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('v1'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('list'),
                            new \PHPStan\Type\Constant\ConstantStringType('aggregation'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedResultReceivers'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAdditionalAnalyses'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedResultReceivers'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAdditionalAnalyses'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedResultReceivers'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAdditionalAnalyses'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getIdMappingTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('idMappingTable'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('inputReferenceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('manageResourcePolicies'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('idMappingTableInputSource'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('idNamespaceAssociationId'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getIdNamespaceAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('idNamespaceAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('idMappingConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('inputReferenceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('manageResourcePolicies'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('idNamespaceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('idMappingWorkflowsSupported'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowUseAsDimensionColumn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('membership'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationCreatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationCreatorDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('memberAbilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('mlMemberAbilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('queryLogStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultResultConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('paymentConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COLLABORATION_DELETED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CAN_QUERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAN_RECEIVE_RESULTS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('customMLMemberAbilities'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CAN_RECEIVE_MODEL_OUTPUT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CAN_RECEIVE_INFERENCE_OUTPUT'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outputConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('resultFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('keyPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('singleFileOutput'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('queryCompute'),
                        new \PHPStan\Type\Constant\ConstantStringType('machineLearning'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('isResponsible'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('modelTraining'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelInference'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isResponsible'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isResponsible'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getPrivacyBudgetTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('privacyBudgetTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('privacyBudgetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRefresh'),
                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CALENDAR_MONTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('differentialPrivacy'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('epsilon'),
                            new \PHPStan\Type\Constant\ConstantStringType('usersNoisePerQuery'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getProtectedQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('protectedQuery'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('sqlParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('resultConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('statistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                    new \PHPStan\Type\Constant\ConstantStringType('differentialPrivacy'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('queryString'),
                        new \PHPStan\Type\Constant\ConstantStringType('analysisTemplateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outputConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            new \PHPStan\Type\Constant\ConstantStringType('member'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('resultFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('keyPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('singleFileOutput'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('totalDurationInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('billedResourceUtilization'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('units'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('output'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            new \PHPStan\Type\Constant\ConstantStringType('memberList'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sensitivityParameters'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('aggregationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('aggregationExpression'),
                            new \PHPStan\Type\Constant\ConstantStringType('userContributionLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('minColumnValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxColumnValue'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AVG'),
                                new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                                new \PHPStan\Type\Constant\ConstantStringType('COUNT_DISTINCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('STDDEV'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('worker'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('number'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CR.1X'),
                                new \PHPStan\Type\Constant\ConstantStringType('CR.4X'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getSchema(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('schema'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('columns'),
                    new \PHPStan\Type\Constant\ConstantStringType('partitionKeys'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisRuleTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaStatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaTypeProperties'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID_MAPPING_TABLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_QUERY'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID_MAPPING_TABLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reasons'),
                        new \PHPStan\Type\Constant\ConstantStringType('analysisRuleType'),
                        new \PHPStan\Type\Constant\ConstantStringType('configurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('analysisType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_RULE_MISSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_TEMPLATES_NOT_CONFIGURED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_PROVIDERS_NOT_CONFIGURED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY_POLICY_NOT_CONFIGURED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ID_MAPPING_TABLE_NOT_POPULATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('COLLABORATION_ANALYSIS_RULE_NOT_CONFIGURED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ADDITIONAL_ANALYSES_NOT_CONFIGURED'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESULT_RECEIVERS_NOT_CONFIGURED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ADDITIONAL_ANALYSES_NOT_ALLOWED'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESULT_RECEIVERS_NOT_ALLOWED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_RULE_TYPES_NOT_COMPATIBLE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('ID_MAPPING_TABLE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT_ANALYSIS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITIONAL_ANALYSIS'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('idMappingTable'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('idMappingTableInputSource'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idNamespaceAssociationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                                ]),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getSchemaAnalysisRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analysisRule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID_MAPPING_TABLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('v1'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('list'),
                            new \PHPStan\Type\Constant\ConstantStringType('aggregation'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                            new \PHPStan\Type\Constant\ConstantStringType('idMappingTable'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('joinColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedJoinOperators'),
                                new \PHPStan\Type\Constant\ConstantStringType('listColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalAnalyses'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AND'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('aggregateColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('joinColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('joinRequired'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedJoinOperators'),
                                new \PHPStan\Type\Constant\ConstantStringType('dimensionColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('scalarFunctions'),
                                new \PHPStan\Type\Constant\ConstantStringType('outputConstraints'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalAnalyses'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnNames'),
                                    new \PHPStan\Type\Constant\ConstantStringType('function'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SUM_DISTINCT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COUNT_DISTINCT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AVG'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_RUNNER'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AND'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ABS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CAST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CEILING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COALESCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CURRENT_DATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATEADD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXTRACT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FLOOR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GETDATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOWER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RTRIM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQRT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBSTRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_CHAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_DATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_NUMBER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_TIMESTAMP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRIM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRUNC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPPER'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('minimum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('COUNT_DISTINCT'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAnalyses'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAnalysisProviders'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalAnalyses'),
                                new \PHPStan\Type\Constant\ConstantStringType('disallowedOutputColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('differentialPrivacy'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columns'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('joinColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryConstraints'),
                                new \PHPStan\Type\Constant\ConstantStringType('dimensionColumns'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('requireOverlap'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('columns'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listAnalysisTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('analysisTemplateSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listCollaborationAnalysisTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('collaborationAnalysisTemplateSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listCollaborationConfiguredAudienceModelAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('collaborationConfiguredAudienceModelAssociationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCollaborationIdNamespaceAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('collaborationIdNamespaceAssociationSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('inputReferenceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('manageResourcePolicies'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('idNamespaceType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listCollaborationPrivacyBudgetTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('collaborationPrivacyBudgetTemplateSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('privacyBudgetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listCollaborationPrivacyBudgets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('collaborationPrivacyBudgetSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('privacyBudgetTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('privacyBudgetTemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('budget'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('differentialPrivacy'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('aggregations'),
                            new \PHPStan\Type\Constant\ConstantStringType('epsilon'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('remainingCount'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AVG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COUNT_DISTINCT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STDDEV'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCollaborations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('collaborationList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('memberStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('analyticsEngine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LEFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SPARK'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLEAN_ROOMS_SQL'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listConfiguredAudienceModelAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelAssociationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
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
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listConfiguredTableAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredTableAssociationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listConfiguredTables(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredTableSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisRuleTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisMethod'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_QUERY'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIdMappingTables(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('idMappingTableSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('inputReferenceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('manageResourcePolicies'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIdNamespaceAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('idNamespaceAssociationSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('inputReferenceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('manageResourcePolicies'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('idNamespaceType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('memberSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('abilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('mlAbilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('paymentConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LEFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CAN_QUERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAN_RECEIVE_RESULTS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('customMLMemberAbilities'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CAN_RECEIVE_MODEL_OUTPUT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CAN_RECEIVE_INFERENCE_OUTPUT'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('queryCompute'),
                        new \PHPStan\Type\Constant\ConstantStringType('machineLearning'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('isResponsible'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('modelTraining'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelInference'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isResponsible'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isResponsible'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listMemberships(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('membershipSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationCreatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationCreatorDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('memberAbilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('mlMemberAbilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('paymentConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COLLABORATION_DELETED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CAN_QUERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAN_RECEIVE_RESULTS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('customMLMemberAbilities'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CAN_RECEIVE_MODEL_OUTPUT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CAN_RECEIVE_INFERENCE_OUTPUT'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('queryCompute'),
                        new \PHPStan\Type\Constant\ConstantStringType('machineLearning'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('isResponsible'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('modelTraining'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelInference'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isResponsible'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isResponsible'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listPrivacyBudgetTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('privacyBudgetTemplateSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('privacyBudgetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listPrivacyBudgets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('privacyBudgetSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('privacyBudgetTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('privacyBudgetTemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('budget'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('differentialPrivacy'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('aggregations'),
                            new \PHPStan\Type\Constant\ConstantStringType('epsilon'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('remainingCount'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AVG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COUNT_DISTINCT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STDDEV'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProtectedQueries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('protectedQueries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('receiverConfigurations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('analysisType'),
                        new \PHPStan\Type\Constant\ConstantStringType('configurationDetails'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT_ANALYSIS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITIONAL_ANALYSIS'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('directAnalysisConfigurationDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('receiverAccountIds'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listSchemas(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('schemaSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisRuleTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisMethod'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID_MAPPING_TABLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID_MAPPING_TABLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_QUERY'),
                ]),
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
    private function populateIdMappingTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('idMappingJobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function previewPrivacyImpact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('privacyImpact'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('differentialPrivacy'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('aggregations'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxCount'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AVG'),
                                new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                                new \PHPStan\Type\Constant\ConstantStringType('COUNT_DISTINCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('STDDEV'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function startProtectedQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('protectedQuery'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('sqlParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('resultConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('statistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                    new \PHPStan\Type\Constant\ConstantStringType('differentialPrivacy'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('queryString'),
                        new \PHPStan\Type\Constant\ConstantStringType('analysisTemplateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outputConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            new \PHPStan\Type\Constant\ConstantStringType('member'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('resultFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('keyPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('singleFileOutput'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('totalDurationInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('billedResourceUtilization'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('units'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('output'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            new \PHPStan\Type\Constant\ConstantStringType('memberList'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sensitivityParameters'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('aggregationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('aggregationExpression'),
                            new \PHPStan\Type\Constant\ConstantStringType('userContributionLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('minColumnValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxColumnValue'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AVG'),
                                new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                                new \PHPStan\Type\Constant\ConstantStringType('COUNT_DISTINCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('STDDEV'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('worker'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('number'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CR.1X'),
                                new \PHPStan\Type\Constant\ConstantStringType('CR.4X'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
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
    private function updateAnalysisTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analysisTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('validations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('referencedTables'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMALLINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                            new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DECIMAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('REAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE_PRECISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMPTZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMETZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('VARBYTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BYTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHARACTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                            new \PHPStan\Type\Constant\ConstantStringType('NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHORT'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP_LTZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP_NTZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TINYINT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reasons'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNABLE_TO_VALIDATE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateCollaboration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('collaboration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('memberStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataEncryptionMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('queryLogStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('analyticsEngine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LEFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowCleartext'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowDuplicates'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowJoinsOnColumnsWithDifferentNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('preserveNulls'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SPARK'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLEAN_ROOMS_SQL'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateConfiguredAudienceModelAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('manageResourcePolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateConfiguredTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredTable'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('tableReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisRuleTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('allowedColumns'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('glue'),
                        new \PHPStan\Type\Constant\ConstantStringType('snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('athena'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('secretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('accountIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                            new \PHPStan\Type\Constant\ConstantStringType('tableSchema'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('v1'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('columnType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_QUERY'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateConfiguredTableAnalysisRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analysisRule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('v1'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('list'),
                            new \PHPStan\Type\Constant\ConstantStringType('aggregation'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('joinColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedJoinOperators'),
                                new \PHPStan\Type\Constant\ConstantStringType('listColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalAnalyses'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AND'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('aggregateColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('joinColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('joinRequired'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedJoinOperators'),
                                new \PHPStan\Type\Constant\ConstantStringType('dimensionColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('scalarFunctions'),
                                new \PHPStan\Type\Constant\ConstantStringType('outputConstraints'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalAnalyses'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnNames'),
                                    new \PHPStan\Type\Constant\ConstantStringType('function'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SUM_DISTINCT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COUNT_DISTINCT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AVG'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_RUNNER'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AND'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ABS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CAST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CEILING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COALESCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CURRENT_DATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATEADD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXTRACT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FLOOR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GETDATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOWER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RTRIM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQRT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBSTRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_CHAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_DATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_NUMBER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO_TIMESTAMP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRIM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRUNC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPPER'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('minimum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('COUNT_DISTINCT'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAnalyses'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAnalysisProviders'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalAnalyses'),
                                new \PHPStan\Type\Constant\ConstantStringType('disallowedOutputColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('differentialPrivacy'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columns'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateConfiguredTableAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredTableAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('analysisRuleTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateConfiguredTableAssociationAnalysisRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analysisRule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableAssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredTableAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('v1'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('list'),
                            new \PHPStan\Type\Constant\ConstantStringType('aggregation'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedResultReceivers'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAdditionalAnalyses'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedResultReceivers'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAdditionalAnalyses'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedResultReceivers'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAdditionalAnalyses'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateIdMappingTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('idMappingTable'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('inputReferenceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('manageResourcePolicies'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('idMappingTableInputSource'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('idNamespaceAssociationId'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateIdNamespaceAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('idNamespaceAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputReferenceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('idMappingConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('inputReferenceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('manageResourcePolicies'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('idNamespaceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('idMappingWorkflowsSupported'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowUseAsDimensionColumn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('membership'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationCreatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationCreatorDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('memberAbilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('mlMemberAbilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('queryLogStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultResultConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('paymentConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COLLABORATION_DELETED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CAN_QUERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAN_RECEIVE_RESULTS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('customMLMemberAbilities'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CAN_RECEIVE_MODEL_OUTPUT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CAN_RECEIVE_INFERENCE_OUTPUT'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outputConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('resultFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('keyPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('singleFileOutput'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('queryCompute'),
                        new \PHPStan\Type\Constant\ConstantStringType('machineLearning'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('isResponsible'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('modelTraining'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelInference'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isResponsible'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isResponsible'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updatePrivacyBudgetTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('privacyBudgetTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('privacyBudgetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRefresh'),
                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantStringType('DIFFERENTIAL_PRIVACY'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CALENDAR_MONTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('differentialPrivacy'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('epsilon'),
                            new \PHPStan\Type\Constant\ConstantStringType('usersNoisePerQuery'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateProtectedQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('protectedQuery'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipId'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('sqlParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('resultConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('statistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                    new \PHPStan\Type\Constant\ConstantStringType('differentialPrivacy'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('queryString'),
                        new \PHPStan\Type\Constant\ConstantStringType('analysisTemplateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outputConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            new \PHPStan\Type\Constant\ConstantStringType('member'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('resultFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('keyPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('singleFileOutput'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('totalDurationInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('billedResourceUtilization'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('units'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('output'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            new \PHPStan\Type\Constant\ConstantStringType('memberList'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sensitivityParameters'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('aggregationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('aggregationExpression'),
                            new \PHPStan\Type\Constant\ConstantStringType('userContributionLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('minColumnValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxColumnValue'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AVG'),
                                new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                                new \PHPStan\Type\Constant\ConstantStringType('COUNT_DISTINCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('STDDEV'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('worker'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('number'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CR.1X'),
                                new \PHPStan\Type\Constant\ConstantStringType('CR.4X'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
}