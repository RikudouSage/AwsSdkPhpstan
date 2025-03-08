<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class BedrockAgentClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\BedrockAgent\BedrockAgentClient>
     */
    public function getClass(): string
    {
        return \Aws\BedrockAgent\BedrockAgentClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateAgentCollaborator',
            'associateAgentKnowledgeBase',
            'createAgent',
            'createAgentActionGroup',
            'createAgentAlias',
            'createDataSource',
            'createFlow',
            'createFlowAlias',
            'createFlowVersion',
            'createKnowledgeBase',
            'createPrompt',
            'createPromptVersion',
            'deleteAgent',
            'deleteAgentActionGroup',
            'deleteAgentAlias',
            'deleteAgentVersion',
            'deleteDataSource',
            'deleteFlow',
            'deleteFlowAlias',
            'deleteFlowVersion',
            'deleteKnowledgeBase',
            'deleteKnowledgeBaseDocuments',
            'deletePrompt',
            'disassociateAgentCollaborator',
            'disassociateAgentKnowledgeBase',
            'getAgent',
            'getAgentActionGroup',
            'getAgentAlias',
            'getAgentCollaborator',
            'getAgentKnowledgeBase',
            'getAgentVersion',
            'getDataSource',
            'getFlow',
            'getFlowAlias',
            'getFlowVersion',
            'getIngestionJob',
            'getKnowledgeBase',
            'getKnowledgeBaseDocuments',
            'getPrompt',
            'ingestKnowledgeBaseDocuments',
            'listAgentActionGroups',
            'listAgentAliases',
            'listAgentCollaborators',
            'listAgentKnowledgeBases',
            'listAgentVersions',
            'listAgents',
            'listDataSources',
            'listFlowAliases',
            'listFlowVersions',
            'listFlows',
            'listIngestionJobs',
            'listKnowledgeBaseDocuments',
            'listKnowledgeBases',
            'listPrompts',
            'listTagsForResource',
            'prepareAgent',
            'prepareFlow',
            'startIngestionJob',
            'stopIngestionJob',
            'tagResource',
            'untagResource',
            'updateAgent',
            'updateAgentActionGroup',
            'updateAgentAlias',
            'updateAgentCollaborator',
            'updateAgentKnowledgeBase',
            'updateDataSource',
            'updateFlow',
            'updateFlowAlias',
            'updateKnowledgeBase',
            'updatePrompt',
            'validateFlowDefinition',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateAgentCollaborator' => $this->associateAgentCollaborator(),
            'associateAgentKnowledgeBase' => $this->associateAgentKnowledgeBase(),
            'createAgent' => $this->createAgent(),
            'createAgentActionGroup' => $this->createAgentActionGroup(),
            'createAgentAlias' => $this->createAgentAlias(),
            'createDataSource' => $this->createDataSource(),
            'createFlow' => $this->createFlow(),
            'createFlowAlias' => $this->createFlowAlias(),
            'createFlowVersion' => $this->createFlowVersion(),
            'createKnowledgeBase' => $this->createKnowledgeBase(),
            'createPrompt' => $this->createPrompt(),
            'createPromptVersion' => $this->createPromptVersion(),
            'deleteAgent' => $this->deleteAgent(),
            'deleteAgentActionGroup' => $this->deleteAgentActionGroup(),
            'deleteAgentAlias' => $this->deleteAgentAlias(),
            'deleteAgentVersion' => $this->deleteAgentVersion(),
            'deleteDataSource' => $this->deleteDataSource(),
            'deleteFlow' => $this->deleteFlow(),
            'deleteFlowAlias' => $this->deleteFlowAlias(),
            'deleteFlowVersion' => $this->deleteFlowVersion(),
            'deleteKnowledgeBase' => $this->deleteKnowledgeBase(),
            'deleteKnowledgeBaseDocuments' => $this->deleteKnowledgeBaseDocuments(),
            'deletePrompt' => $this->deletePrompt(),
            'disassociateAgentCollaborator' => $this->disassociateAgentCollaborator(),
            'disassociateAgentKnowledgeBase' => $this->disassociateAgentKnowledgeBase(),
            'getAgent' => $this->getAgent(),
            'getAgentActionGroup' => $this->getAgentActionGroup(),
            'getAgentAlias' => $this->getAgentAlias(),
            'getAgentCollaborator' => $this->getAgentCollaborator(),
            'getAgentKnowledgeBase' => $this->getAgentKnowledgeBase(),
            'getAgentVersion' => $this->getAgentVersion(),
            'getDataSource' => $this->getDataSource(),
            'getFlow' => $this->getFlow(),
            'getFlowAlias' => $this->getFlowAlias(),
            'getFlowVersion' => $this->getFlowVersion(),
            'getIngestionJob' => $this->getIngestionJob(),
            'getKnowledgeBase' => $this->getKnowledgeBase(),
            'getKnowledgeBaseDocuments' => $this->getKnowledgeBaseDocuments(),
            'getPrompt' => $this->getPrompt(),
            'ingestKnowledgeBaseDocuments' => $this->ingestKnowledgeBaseDocuments(),
            'listAgentActionGroups' => $this->listAgentActionGroups(),
            'listAgentAliases' => $this->listAgentAliases(),
            'listAgentCollaborators' => $this->listAgentCollaborators(),
            'listAgentKnowledgeBases' => $this->listAgentKnowledgeBases(),
            'listAgentVersions' => $this->listAgentVersions(),
            'listAgents' => $this->listAgents(),
            'listDataSources' => $this->listDataSources(),
            'listFlowAliases' => $this->listFlowAliases(),
            'listFlowVersions' => $this->listFlowVersions(),
            'listFlows' => $this->listFlows(),
            'listIngestionJobs' => $this->listIngestionJobs(),
            'listKnowledgeBaseDocuments' => $this->listKnowledgeBaseDocuments(),
            'listKnowledgeBases' => $this->listKnowledgeBases(),
            'listPrompts' => $this->listPrompts(),
            'listTagsForResource' => $this->listTagsForResource(),
            'prepareAgent' => $this->prepareAgent(),
            'prepareFlow' => $this->prepareFlow(),
            'startIngestionJob' => $this->startIngestionJob(),
            'stopIngestionJob' => $this->stopIngestionJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAgent' => $this->updateAgent(),
            'updateAgentActionGroup' => $this->updateAgentActionGroup(),
            'updateAgentAlias' => $this->updateAgentAlias(),
            'updateAgentCollaborator' => $this->updateAgentCollaborator(),
            'updateAgentKnowledgeBase' => $this->updateAgentKnowledgeBase(),
            'updateDataSource' => $this->updateDataSource(),
            'updateFlow' => $this->updateFlow(),
            'updateFlowAlias' => $this->updateFlowAlias(),
            'updateKnowledgeBase' => $this->updateKnowledgeBase(),
            'updatePrompt' => $this->updatePrompt(),
            'validateFlowDefinition' => $this->validateFlowDefinition(),
        };
    }
    private function associateAgentCollaborator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentCollaborator'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentDescriptor'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationInstruction'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaboratorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('relayConversationHistory'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('aliasArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TO_COLLABORATOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function associateAgentKnowledgeBase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentKnowledgeBase'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseState'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agent'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentCollaboration'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentResourceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('customOrchestration'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerEncryptionKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('foundationModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('idleSessionTTLInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('instruction'),
                    new \PHPStan\Type\Constant\ConstantStringType('memoryConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('orchestrationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('preparedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('promptOverrideConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUPERVISOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUPERVISOR_ROUTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_PREPARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('executor'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('guardrailIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabledMemoryTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionSummaryConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageDays'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('SESSION_SUMMARY'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maxRecentSessions'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_ORCHESTRATION'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('overrideLambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('promptConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('additionalModelRequestFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('basePromptTemplate'),
                            new \PHPStan\Type\Constant\ConstantStringType('foundationModel'),
                            new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('parserMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('promptCreationMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('promptState'),
                            new \PHPStan\Type\Constant\ConstantStringType('promptType'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('maximumLength'),
                                new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                new \PHPStan\Type\Constant\ConstantStringType('topK'),
                                new \PHPStan\Type\Constant\ConstantStringType('topP'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PRE_PROCESSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ORCHESTRATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('POST_PROCESSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE_RESPONSE_GENERATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEMORY_SUMMARIZATION'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createAgentActionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentActionGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupExecutor'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupState'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiSchema'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('functionSchema'),
                    new \PHPStan\Type\Constant\ConstantStringType('parentActionSignature'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('customControl'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('RETURN_CONTROL'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('payload'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3ObjectKey'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('functions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('requireConfirmation'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('required'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('string'),
                                    new \PHPStan\Type\Constant\ConstantStringType('number'),
                                    new \PHPStan\Type\Constant\ConstantStringType('integer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('boolean'),
                                    new \PHPStan\Type\Constant\ConstantStringType('array'),
                                ]),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON.UserInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON.CodeInterpreter'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createAgentAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentAlias'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasHistoryEvents'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasName'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('routingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('routingConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('startDate'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('provisionedThroughput'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISSOCIATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('provisionedThroughput'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataDeletionPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverSideEncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('vectorIngestionConfiguration'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RETAIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('confluenceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('salesforceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('sharePointConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('webConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('crawlerConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('filterConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('patternObjectFilter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('inclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('objectType'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATTERN'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                                new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostType'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostUrl'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH2_CLIENT_CREDENTIALS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('SAAS'),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('inclusionPrefixes'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('crawlerConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('filterConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('patternObjectFilter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('inclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('objectType'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATTERN'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                                new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostUrl'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('OAUTH2_CLIENT_CREDENTIALS'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('crawlerConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('filterConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('patternObjectFilter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('inclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('objectType'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATTERN'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                                new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('domain'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostType'),
                                new \PHPStan\Type\Constant\ConstantStringType('siteUrls'),
                                new \PHPStan\Type\Constant\ConstantStringType('tenantId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH2_CLIENT_CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH2_SHAREPOINT_APP_ONLY_CLIENT_CREDENTIALS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('ONLINE'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLUENCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT_METADATA'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('crawlerConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('crawlerLimits'),
                                new \PHPStan\Type\Constant\ConstantStringType('exclusionFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('inclusionFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('scope'),
                                new \PHPStan\Type\Constant\ConstantStringType('userAgent'),
                                new \PHPStan\Type\Constant\ConstantStringType('userAgentHeader'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('maxPages'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HOST_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBDOMAINS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('urlConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('seedUrls'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_UNSUCCESSFUL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('chunkingConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('contextEnrichmentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('customTransformationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('parsingConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('chunkingStrategy'),
                            new \PHPStan\Type\Constant\ConstantStringType('fixedSizeChunkingConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('hierarchicalChunkingConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('semanticChunkingConfiguration'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FIXED_SIZE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIERARCHICAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                new \PHPStan\Type\Constant\ConstantStringType('overlapPercentage'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('levelConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('overlapTokens'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('breakpointPercentileThreshold'),
                                new \PHPStan\Type\Constant\ConstantStringType('bufferSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bedrockFoundationModelConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('enrichmentStrategyConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('method'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('CHUNK_ENTITY_EXTRACTION'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('BEDROCK_FOUNDATION_MODEL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('intermediateStorage'),
                            new \PHPStan\Type\Constant\ConstantStringType('transformations'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('stepToApply'),
                                new \PHPStan\Type\Constant\ConstantStringType('transformationFunction'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('POST_CHUNKING'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('transformationLambdaConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('lambdaArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bedrockDataAutomationConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('bedrockFoundationModelConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('parsingStrategy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('parsingModality'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('MULTIMODAL'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('parsingModality'),
                                new \PHPStan\Type\Constant\ConstantStringType('parsingPrompt'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('MULTIMODAL'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('parsingPromptText'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BEDROCK_FOUNDATION_MODEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEDROCK_DATA_AUTOMATION'),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('customerEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('definition'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connections'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodes'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('target'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('conditional'),
                            new \PHPStan\Type\Constant\ConstantStringType('data'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('condition'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceOutput'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetInput'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Data'),
                            new \PHPStan\Type\Constant\ConstantStringType('Conditional'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('agent'),
                            new \PHPStan\Type\Constant\ConstantStringType('collector'),
                            new \PHPStan\Type\Constant\ConstantStringType('condition'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('iterator'),
                            new \PHPStan\Type\Constant\ConstantStringType('knowledgeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaFunction'),
                            new \PHPStan\Type\Constant\ConstantStringType('lex'),
                            new \PHPStan\Type\Constant\ConstantStringType('output'),
                            new \PHPStan\Type\Constant\ConstantStringType('prompt'),
                            new \PHPStan\Type\Constant\ConstantStringType('retrieval'),
                            new \PHPStan\Type\Constant\ConstantStringType('storage'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('agentAliasArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('conditions'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('lambdaArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('botAliasArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('localeId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('inline'),
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('additionalModelRequestFields'),
                                        new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('templateConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                                new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                                new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                                new \PHPStan\Type\Constant\ConstantStringType('topP'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\FloatType(),
                                                new \PHPStan\Type\FloatType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('chat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                                                new \PHPStan\Type\Constant\ConstantStringType('messages'),
                                                new \PHPStan\Type\Constant\ConstantStringType('system'),
                                                new \PHPStan\Type\Constant\ConstantStringType('toolConfiguration'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('role'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                        ], [
                                                            new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('assistant'),
                                                    ]),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                    ]),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('toolChoice'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('tools'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('any'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('auto'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('tool'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('toolSpec'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                        ], [
                                                            new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                        ]),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('inputSchema'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                                                            ], [
                                                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                            ]),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('promptArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('serviceConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('serviceConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                new \PHPStan\Type\Constant\ConstantStringType('Object'),
                                new \PHPStan\Type\Constant\ConstantStringType('Array'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                new \PHPStan\Type\Constant\ConstantStringType('Object'),
                                new \PHPStan\Type\Constant\ConstantStringType('Array'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Input'),
                            new \PHPStan\Type\Constant\ConstantStringType('Output'),
                            new \PHPStan\Type\Constant\ConstantStringType('KnowledgeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lex'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prompt'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunction'),
                            new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                            new \PHPStan\Type\Constant\ConstantStringType('Agent'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retrieval'),
                            new \PHPStan\Type\Constant\ConstantStringType('Iterator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Collector'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Prepared'),
                    new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotPrepared'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFlowAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('flowId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('routingConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('flowVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createFlowVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('customerEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('definition'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connections'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodes'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('target'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('conditional'),
                            new \PHPStan\Type\Constant\ConstantStringType('data'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('condition'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceOutput'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetInput'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Data'),
                            new \PHPStan\Type\Constant\ConstantStringType('Conditional'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('agent'),
                            new \PHPStan\Type\Constant\ConstantStringType('collector'),
                            new \PHPStan\Type\Constant\ConstantStringType('condition'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('iterator'),
                            new \PHPStan\Type\Constant\ConstantStringType('knowledgeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaFunction'),
                            new \PHPStan\Type\Constant\ConstantStringType('lex'),
                            new \PHPStan\Type\Constant\ConstantStringType('output'),
                            new \PHPStan\Type\Constant\ConstantStringType('prompt'),
                            new \PHPStan\Type\Constant\ConstantStringType('retrieval'),
                            new \PHPStan\Type\Constant\ConstantStringType('storage'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('agentAliasArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('conditions'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('lambdaArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('botAliasArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('localeId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('inline'),
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('additionalModelRequestFields'),
                                        new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('templateConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                                new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                                new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                                new \PHPStan\Type\Constant\ConstantStringType('topP'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\FloatType(),
                                                new \PHPStan\Type\FloatType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('chat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                                                new \PHPStan\Type\Constant\ConstantStringType('messages'),
                                                new \PHPStan\Type\Constant\ConstantStringType('system'),
                                                new \PHPStan\Type\Constant\ConstantStringType('toolConfiguration'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('role'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                        ], [
                                                            new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('assistant'),
                                                    ]),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                    ]),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('toolChoice'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('tools'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('any'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('auto'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('tool'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('toolSpec'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                        ], [
                                                            new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                        ]),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('inputSchema'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                                                            ], [
                                                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                            ]),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('promptArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('serviceConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('serviceConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                new \PHPStan\Type\Constant\ConstantStringType('Object'),
                                new \PHPStan\Type\Constant\ConstantStringType('Array'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                new \PHPStan\Type\Constant\ConstantStringType('Object'),
                                new \PHPStan\Type\Constant\ConstantStringType('Array'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Input'),
                            new \PHPStan\Type\Constant\ConstantStringType('Output'),
                            new \PHPStan\Type\Constant\ConstantStringType('KnowledgeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lex'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prompt'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunction'),
                            new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                            new \PHPStan\Type\Constant\ConstantStringType('Agent'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retrieval'),
                            new \PHPStan\Type\Constant\ConstantStringType('Iterator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Collector'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Prepared'),
                    new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotPrepared'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createKnowledgeBase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBase'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('storageConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kendraKnowledgeBaseConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('sqlKnowledgeBaseConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('vectorKnowledgeBaseConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kendraIndexArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('redshiftConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('queryEngineConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryGenerationConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('storageConfigurations'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('provisionedConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('serverlessConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('authConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('clusterIdentifier'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('databaseUser'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('usernamePasswordSecretArn'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME_PASSWORD'),
                                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('authConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('workgroupArn'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('usernamePasswordSecretArn'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME_PASSWORD'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SERVERLESS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('executionTimeoutSeconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('generationContext'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('curatedQueries'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tables'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('naturalLanguage'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sql'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('columns'),
                                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                                            new \PHPStan\Type\Constant\ConstantStringType('inclusion'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inclusion'),
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('EXCLUDE'),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EXCLUDE'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('awsDataCatalogConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redshiftConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('tableNames'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AWS_DATA_CATALOG'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VECTOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('KENDRA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('embeddingModelArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('embeddingModelConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('supplementalDataStorageConfiguration'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bedrockEmbeddingModelConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('embeddingDataType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FLOAT32'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('storageLocations'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_UNSUCCESSFUL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('mongoDbAtlasConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('neptuneAnalyticsConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('opensearchServerlessConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('pineconeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('rdsConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('redisEnterpriseCloudConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('collectionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('endpointServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('vectorIndexName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                                new \PHPStan\Type\Constant\ConstantStringType('vectorField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('graphArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('collectionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('vectorIndexName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                                new \PHPStan\Type\Constant\ConstantStringType('vectorField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connectionString'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('primaryKeyField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                                new \PHPStan\Type\Constant\ConstantStringType('vectorField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('vectorIndexName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                                new \PHPStan\Type\Constant\ConstantStringType('vectorField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH_SERVERLESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PINECONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REDIS_ENTERPRISE_CLOUD'),
                            new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONGO_DB_ATLAS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEPTUNE_ANALYTICS'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createPrompt(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('customerEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultVariant'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('variants'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalModelRequestFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('genAiResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agent'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('agentIdentifier'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                            new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                            new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                            new \PHPStan\Type\Constant\ConstantStringType('topP'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('chat'),
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('messages'),
                            new \PHPStan\Type\Constant\ConstantStringType('system'),
                            new \PHPStan\Type\Constant\ConstantStringType('toolConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('role'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('user'),
                                    new \PHPStan\Type\Constant\ConstantStringType('assistant'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('toolChoice'),
                                new \PHPStan\Type\Constant\ConstantStringType('tools'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('any'),
                                    new \PHPStan\Type\Constant\ConstantStringType('auto'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tool'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                    new \PHPStan\Type\Constant\ConstantStringType('toolSpec'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                                        new \PHPStan\Type\Constant\ConstantStringType('inputSchema'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('default'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPromptVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('customerEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultVariant'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('variants'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalModelRequestFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('genAiResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agent'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('agentIdentifier'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                            new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                            new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                            new \PHPStan\Type\Constant\ConstantStringType('topP'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('chat'),
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('messages'),
                            new \PHPStan\Type\Constant\ConstantStringType('system'),
                            new \PHPStan\Type\Constant\ConstantStringType('toolConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('role'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('user'),
                                    new \PHPStan\Type\Constant\ConstantStringType('assistant'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('toolChoice'),
                                new \PHPStan\Type\Constant\ConstantStringType('tools'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('any'),
                                    new \PHPStan\Type\Constant\ConstantStringType('auto'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tool'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                    new \PHPStan\Type\Constant\ConstantStringType('toolSpec'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                                        new \PHPStan\Type\Constant\ConstantStringType('inputSchema'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('default'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                new \PHPStan\Type\Constant\ConstantStringType('agentStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PREPARED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_PREPARED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('VERSIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
            ]),
        ]);
    }
    private function deleteAgentActionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAgentAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentAliasId'),
                new \PHPStan\Type\Constant\ConstantStringType('agentAliasStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('agentId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PREPARED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISSOCIATED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAgentVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                new \PHPStan\Type\Constant\ConstantStringType('agentStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PREPARED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_PREPARED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('VERSIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_UNSUCCESSFUL'),
                ]),
            ]),
        ]);
    }
    private function deleteFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteFlowAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('flowId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteFlowVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteKnowledgeBase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_UNSUCCESSFUL'),
                ]),
            ]),
        ]);
    }
    private function deleteKnowledgeBaseDocuments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('documentDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('custom'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INDEXED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_INDEXED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('METADATA_PARTIALLY_INDEXED'),
                        new \PHPStan\Type\Constant\ConstantStringType('METADATA_UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IGNORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deletePrompt(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateAgentCollaborator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateAgentKnowledgeBase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agent'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentCollaboration'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentResourceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('customOrchestration'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerEncryptionKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('foundationModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('idleSessionTTLInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('instruction'),
                    new \PHPStan\Type\Constant\ConstantStringType('memoryConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('orchestrationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('preparedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('promptOverrideConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUPERVISOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUPERVISOR_ROUTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_PREPARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('executor'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('guardrailIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabledMemoryTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionSummaryConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageDays'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('SESSION_SUMMARY'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maxRecentSessions'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_ORCHESTRATION'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('overrideLambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('promptConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('additionalModelRequestFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('basePromptTemplate'),
                            new \PHPStan\Type\Constant\ConstantStringType('foundationModel'),
                            new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('parserMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('promptCreationMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('promptState'),
                            new \PHPStan\Type\Constant\ConstantStringType('promptType'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('maximumLength'),
                                new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                new \PHPStan\Type\Constant\ConstantStringType('topK'),
                                new \PHPStan\Type\Constant\ConstantStringType('topP'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PRE_PROCESSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ORCHESTRATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('POST_PROCESSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE_RESPONSE_GENERATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEMORY_SUMMARIZATION'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getAgentActionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentActionGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupExecutor'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupState'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiSchema'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('functionSchema'),
                    new \PHPStan\Type\Constant\ConstantStringType('parentActionSignature'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('customControl'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('RETURN_CONTROL'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('payload'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3ObjectKey'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('functions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('requireConfirmation'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('required'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('string'),
                                    new \PHPStan\Type\Constant\ConstantStringType('number'),
                                    new \PHPStan\Type\Constant\ConstantStringType('integer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('boolean'),
                                    new \PHPStan\Type\Constant\ConstantStringType('array'),
                                ]),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON.UserInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON.CodeInterpreter'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getAgentAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentAlias'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasHistoryEvents'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasName'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('routingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('routingConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('startDate'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('provisionedThroughput'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISSOCIATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('provisionedThroughput'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getAgentCollaborator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentCollaborator'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentDescriptor'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationInstruction'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaboratorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('relayConversationHistory'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('aliasArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TO_COLLABORATOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getAgentKnowledgeBase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentKnowledgeBase'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseState'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getAgentVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentCollaboration'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentResourceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerEncryptionKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('foundationModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('idleSessionTTLInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('instruction'),
                    new \PHPStan\Type\Constant\ConstantStringType('memoryConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('promptOverrideConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUPERVISOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUPERVISOR_ROUTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_PREPARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('guardrailIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabledMemoryTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionSummaryConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageDays'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('SESSION_SUMMARY'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maxRecentSessions'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('overrideLambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('promptConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('additionalModelRequestFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('basePromptTemplate'),
                            new \PHPStan\Type\Constant\ConstantStringType('foundationModel'),
                            new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('parserMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('promptCreationMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('promptState'),
                            new \PHPStan\Type\Constant\ConstantStringType('promptType'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('maximumLength'),
                                new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                new \PHPStan\Type\Constant\ConstantStringType('topK'),
                                new \PHPStan\Type\Constant\ConstantStringType('topP'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PRE_PROCESSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ORCHESTRATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('POST_PROCESSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE_RESPONSE_GENERATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEMORY_SUMMARIZATION'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataDeletionPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverSideEncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('vectorIngestionConfiguration'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RETAIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('confluenceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('salesforceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('sharePointConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('webConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('crawlerConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('filterConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('patternObjectFilter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('inclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('objectType'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATTERN'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                                new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostType'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostUrl'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH2_CLIENT_CREDENTIALS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('SAAS'),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('inclusionPrefixes'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('crawlerConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('filterConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('patternObjectFilter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('inclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('objectType'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATTERN'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                                new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostUrl'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('OAUTH2_CLIENT_CREDENTIALS'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('crawlerConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('filterConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('patternObjectFilter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('inclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('objectType'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATTERN'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                                new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('domain'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostType'),
                                new \PHPStan\Type\Constant\ConstantStringType('siteUrls'),
                                new \PHPStan\Type\Constant\ConstantStringType('tenantId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH2_CLIENT_CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH2_SHAREPOINT_APP_ONLY_CLIENT_CREDENTIALS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('ONLINE'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLUENCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT_METADATA'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('crawlerConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('crawlerLimits'),
                                new \PHPStan\Type\Constant\ConstantStringType('exclusionFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('inclusionFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('scope'),
                                new \PHPStan\Type\Constant\ConstantStringType('userAgent'),
                                new \PHPStan\Type\Constant\ConstantStringType('userAgentHeader'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('maxPages'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HOST_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBDOMAINS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('urlConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('seedUrls'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_UNSUCCESSFUL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('chunkingConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('contextEnrichmentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('customTransformationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('parsingConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('chunkingStrategy'),
                            new \PHPStan\Type\Constant\ConstantStringType('fixedSizeChunkingConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('hierarchicalChunkingConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('semanticChunkingConfiguration'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FIXED_SIZE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIERARCHICAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                new \PHPStan\Type\Constant\ConstantStringType('overlapPercentage'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('levelConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('overlapTokens'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('breakpointPercentileThreshold'),
                                new \PHPStan\Type\Constant\ConstantStringType('bufferSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bedrockFoundationModelConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('enrichmentStrategyConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('method'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('CHUNK_ENTITY_EXTRACTION'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('BEDROCK_FOUNDATION_MODEL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('intermediateStorage'),
                            new \PHPStan\Type\Constant\ConstantStringType('transformations'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('stepToApply'),
                                new \PHPStan\Type\Constant\ConstantStringType('transformationFunction'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('POST_CHUNKING'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('transformationLambdaConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('lambdaArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bedrockDataAutomationConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('bedrockFoundationModelConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('parsingStrategy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('parsingModality'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('MULTIMODAL'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('parsingModality'),
                                new \PHPStan\Type\Constant\ConstantStringType('parsingPrompt'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('MULTIMODAL'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('parsingPromptText'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BEDROCK_FOUNDATION_MODEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEDROCK_DATA_AUTOMATION'),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('customerEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('definition'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('validations'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connections'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodes'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('target'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('conditional'),
                            new \PHPStan\Type\Constant\ConstantStringType('data'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('condition'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceOutput'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetInput'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Data'),
                            new \PHPStan\Type\Constant\ConstantStringType('Conditional'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('agent'),
                            new \PHPStan\Type\Constant\ConstantStringType('collector'),
                            new \PHPStan\Type\Constant\ConstantStringType('condition'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('iterator'),
                            new \PHPStan\Type\Constant\ConstantStringType('knowledgeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaFunction'),
                            new \PHPStan\Type\Constant\ConstantStringType('lex'),
                            new \PHPStan\Type\Constant\ConstantStringType('output'),
                            new \PHPStan\Type\Constant\ConstantStringType('prompt'),
                            new \PHPStan\Type\Constant\ConstantStringType('retrieval'),
                            new \PHPStan\Type\Constant\ConstantStringType('storage'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('agentAliasArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('conditions'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('lambdaArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('botAliasArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('localeId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('inline'),
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('additionalModelRequestFields'),
                                        new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('templateConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                                new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                                new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                                new \PHPStan\Type\Constant\ConstantStringType('topP'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\FloatType(),
                                                new \PHPStan\Type\FloatType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('chat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                                                new \PHPStan\Type\Constant\ConstantStringType('messages'),
                                                new \PHPStan\Type\Constant\ConstantStringType('system'),
                                                new \PHPStan\Type\Constant\ConstantStringType('toolConfiguration'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('role'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                        ], [
                                                            new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('assistant'),
                                                    ]),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                    ]),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('toolChoice'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('tools'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('any'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('auto'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('tool'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('toolSpec'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                        ], [
                                                            new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                        ]),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('inputSchema'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                                                            ], [
                                                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                            ]),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('promptArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('serviceConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('serviceConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                new \PHPStan\Type\Constant\ConstantStringType('Object'),
                                new \PHPStan\Type\Constant\ConstantStringType('Array'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                new \PHPStan\Type\Constant\ConstantStringType('Object'),
                                new \PHPStan\Type\Constant\ConstantStringType('Array'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Input'),
                            new \PHPStan\Type\Constant\ConstantStringType('Output'),
                            new \PHPStan\Type\Constant\ConstantStringType('KnowledgeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lex'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prompt'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunction'),
                            new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                            new \PHPStan\Type\Constant\ConstantStringType('Agent'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retrieval'),
                            new \PHPStan\Type\Constant\ConstantStringType('Iterator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Collector'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Prepared'),
                    new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotPrepared'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('details'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cyclicConnection'),
                        new \PHPStan\Type\Constant\ConstantStringType('duplicateConditionExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('duplicateConnections'),
                        new \PHPStan\Type\Constant\ConstantStringType('incompatibleConnectionDataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('malformedConditionExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('malformedNodeInputExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('mismatchedNodeInputType'),
                        new \PHPStan\Type\Constant\ConstantStringType('mismatchedNodeOutputType'),
                        new \PHPStan\Type\Constant\ConstantStringType('missingConnectionConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('missingDefaultCondition'),
                        new \PHPStan\Type\Constant\ConstantStringType('missingEndingNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('missingNodeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('missingNodeInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('missingNodeOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('missingStartingNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('multipleNodeInputConnections'),
                        new \PHPStan\Type\Constant\ConstantStringType('unfulfilledNodeInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknownConnectionCondition'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknownConnectionSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknownConnectionSourceOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknownConnectionTarget'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknownConnectionTargetInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknownNodeInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknownNodeOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('unreachableNode'),
                        new \PHPStan\Type\Constant\ConstantStringType('unsatisfiedConnectionConditions'),
                        new \PHPStan\Type\Constant\ConstantStringType('unspecified'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('target'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('condition'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expectedType'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                new \PHPStan\Type\Constant\ConstantStringType('Object'),
                                new \PHPStan\Type\Constant\ConstantStringType('Array'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expectedType'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                            new \PHPStan\Type\Constant\ConstantStringType('output'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                new \PHPStan\Type\Constant\ConstantStringType('Object'),
                                new \PHPStan\Type\Constant\ConstantStringType('Array'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                            new \PHPStan\Type\Constant\ConstantStringType('output'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                            new \PHPStan\Type\Constant\ConstantStringType('output'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Warning'),
                        new \PHPStan\Type\Constant\ConstantStringType('Error'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CyclicConnection'),
                        new \PHPStan\Type\Constant\ConstantStringType('DuplicateConnections'),
                        new \PHPStan\Type\Constant\ConstantStringType('DuplicateConditionExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnreachableNode'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownConnectionSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownConnectionSourceOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownConnectionTarget'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownConnectionTargetInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownConnectionCondition'),
                        new \PHPStan\Type\Constant\ConstantStringType('MalformedConditionExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('MalformedNodeInputExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('MismatchedNodeInputType'),
                        new \PHPStan\Type\Constant\ConstantStringType('MismatchedNodeOutputType'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncompatibleConnectionDataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingConnectionConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingDefaultCondition'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingEndingNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingNodeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingNodeInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingNodeOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingStartingNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('MultipleNodeInputConnections'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnfulfilledNodeInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnsatisfiedConnectionConditions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unspecified'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownNodeInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownNodeOutput'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getFlowAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('flowId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('routingConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('flowVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getFlowVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('customerEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('definition'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connections'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodes'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('target'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('conditional'),
                            new \PHPStan\Type\Constant\ConstantStringType('data'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('condition'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceOutput'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetInput'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Data'),
                            new \PHPStan\Type\Constant\ConstantStringType('Conditional'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('agent'),
                            new \PHPStan\Type\Constant\ConstantStringType('collector'),
                            new \PHPStan\Type\Constant\ConstantStringType('condition'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('iterator'),
                            new \PHPStan\Type\Constant\ConstantStringType('knowledgeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaFunction'),
                            new \PHPStan\Type\Constant\ConstantStringType('lex'),
                            new \PHPStan\Type\Constant\ConstantStringType('output'),
                            new \PHPStan\Type\Constant\ConstantStringType('prompt'),
                            new \PHPStan\Type\Constant\ConstantStringType('retrieval'),
                            new \PHPStan\Type\Constant\ConstantStringType('storage'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('agentAliasArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('conditions'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('lambdaArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('botAliasArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('localeId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('inline'),
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('additionalModelRequestFields'),
                                        new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('templateConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                                new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                                new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                                new \PHPStan\Type\Constant\ConstantStringType('topP'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\FloatType(),
                                                new \PHPStan\Type\FloatType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('chat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                                                new \PHPStan\Type\Constant\ConstantStringType('messages'),
                                                new \PHPStan\Type\Constant\ConstantStringType('system'),
                                                new \PHPStan\Type\Constant\ConstantStringType('toolConfiguration'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('role'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                        ], [
                                                            new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('assistant'),
                                                    ]),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                    ]),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('toolChoice'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('tools'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('any'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('auto'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('tool'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('toolSpec'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                        ], [
                                                            new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                        ]),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('inputSchema'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                                                            ], [
                                                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                            ]),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('promptArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('serviceConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('serviceConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                new \PHPStan\Type\Constant\ConstantStringType('Object'),
                                new \PHPStan\Type\Constant\ConstantStringType('Array'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                new \PHPStan\Type\Constant\ConstantStringType('Object'),
                                new \PHPStan\Type\Constant\ConstantStringType('Array'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Input'),
                            new \PHPStan\Type\Constant\ConstantStringType('Output'),
                            new \PHPStan\Type\Constant\ConstantStringType('KnowledgeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lex'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prompt'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunction'),
                            new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                            new \PHPStan\Type\Constant\ConstantStringType('Agent'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retrieval'),
                            new \PHPStan\Type\Constant\ConstantStringType('Iterator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Collector'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Prepared'),
                    new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotPrepared'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getIngestionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ingestionJob'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('ingestionJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('statistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfDocumentsDeleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfDocumentsFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfDocumentsScanned'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfMetadataDocumentsModified'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfMetadataDocumentsScanned'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfModifiedDocumentsIndexed'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfNewDocumentsIndexed'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getKnowledgeBase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBase'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('storageConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kendraKnowledgeBaseConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('sqlKnowledgeBaseConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('vectorKnowledgeBaseConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kendraIndexArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('redshiftConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('queryEngineConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryGenerationConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('storageConfigurations'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('provisionedConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('serverlessConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('authConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('clusterIdentifier'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('databaseUser'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('usernamePasswordSecretArn'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME_PASSWORD'),
                                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('authConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('workgroupArn'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('usernamePasswordSecretArn'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME_PASSWORD'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SERVERLESS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('executionTimeoutSeconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('generationContext'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('curatedQueries'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tables'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('naturalLanguage'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sql'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('columns'),
                                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                                            new \PHPStan\Type\Constant\ConstantStringType('inclusion'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inclusion'),
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('EXCLUDE'),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EXCLUDE'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('awsDataCatalogConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redshiftConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('tableNames'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AWS_DATA_CATALOG'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VECTOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('KENDRA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('embeddingModelArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('embeddingModelConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('supplementalDataStorageConfiguration'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bedrockEmbeddingModelConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('embeddingDataType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FLOAT32'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('storageLocations'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_UNSUCCESSFUL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('mongoDbAtlasConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('neptuneAnalyticsConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('opensearchServerlessConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('pineconeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('rdsConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('redisEnterpriseCloudConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('collectionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('endpointServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('vectorIndexName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                                new \PHPStan\Type\Constant\ConstantStringType('vectorField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('graphArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('collectionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('vectorIndexName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                                new \PHPStan\Type\Constant\ConstantStringType('vectorField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connectionString'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('primaryKeyField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                                new \PHPStan\Type\Constant\ConstantStringType('vectorField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('vectorIndexName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                                new \PHPStan\Type\Constant\ConstantStringType('vectorField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH_SERVERLESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PINECONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REDIS_ENTERPRISE_CLOUD'),
                            new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONGO_DB_ATLAS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEPTUNE_ANALYTICS'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getKnowledgeBaseDocuments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('documentDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('custom'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INDEXED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_INDEXED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('METADATA_PARTIALLY_INDEXED'),
                        new \PHPStan\Type\Constant\ConstantStringType('METADATA_UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IGNORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getPrompt(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('customerEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultVariant'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('variants'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalModelRequestFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('genAiResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agent'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('agentIdentifier'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                            new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                            new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                            new \PHPStan\Type\Constant\ConstantStringType('topP'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('chat'),
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('messages'),
                            new \PHPStan\Type\Constant\ConstantStringType('system'),
                            new \PHPStan\Type\Constant\ConstantStringType('toolConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('role'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('user'),
                                    new \PHPStan\Type\Constant\ConstantStringType('assistant'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('toolChoice'),
                                new \PHPStan\Type\Constant\ConstantStringType('tools'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('any'),
                                    new \PHPStan\Type\Constant\ConstantStringType('auto'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tool'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                    new \PHPStan\Type\Constant\ConstantStringType('toolSpec'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                                        new \PHPStan\Type\Constant\ConstantStringType('inputSchema'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('default'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function ingestKnowledgeBaseDocuments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('documentDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('custom'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INDEXED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_INDEXED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('METADATA_PARTIALLY_INDEXED'),
                        new \PHPStan\Type\Constant\ConstantStringType('METADATA_UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IGNORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listAgentActionGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionGroupSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupState'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAgentAliases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentAliasSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasName'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('routingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISSOCIATED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('provisionedThroughput'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAgentCollaborators(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentDescriptor'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationInstruction'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaboratorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('relayConversationHistory'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('aliasArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TO_COLLABORATOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAgentKnowledgeBases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentKnowledgeBaseSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseState'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAgentVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentVersionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_PREPARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('guardrailIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAgents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('latestAgentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_PREPARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('guardrailIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDataSources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataSourceSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_UNSUCCESSFUL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFlowAliases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('flowAliasSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('flowId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('routingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('flowVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFlowVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('flowVersionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prepared'),
                        new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotPrepared'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFlows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('flowSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prepared'),
                        new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotPrepared'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIngestionJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ingestionJobSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ingestionJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('statistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfDocumentsDeleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfDocumentsFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfDocumentsScanned'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfMetadataDocumentsModified'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfMetadataDocumentsScanned'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfModifiedDocumentsIndexed'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfNewDocumentsIndexed'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKnowledgeBaseDocuments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('documentDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('custom'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INDEXED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_INDEXED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('METADATA_PARTIALLY_INDEXED'),
                        new \PHPStan\Type\Constant\ConstantStringType('METADATA_UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IGNORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKnowledgeBases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_UNSUCCESSFUL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPrompts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('promptSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
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
    private function prepareAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                new \PHPStan\Type\Constant\ConstantStringType('agentStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('preparedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PREPARED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_PREPARED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('VERSIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function prepareFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Prepared'),
                    new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotPrepared'),
                ]),
            ]),
        ]);
    }
    private function startIngestionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ingestionJob'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('ingestionJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('statistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfDocumentsDeleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfDocumentsFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfDocumentsScanned'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfMetadataDocumentsModified'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfMetadataDocumentsScanned'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfModifiedDocumentsIndexed'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfNewDocumentsIndexed'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function stopIngestionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ingestionJob'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('ingestionJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('statistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfDocumentsDeleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfDocumentsFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfDocumentsScanned'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfMetadataDocumentsModified'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfMetadataDocumentsScanned'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfModifiedDocumentsIndexed'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfNewDocumentsIndexed'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function updateAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agent'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentCollaboration'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentResourceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('customOrchestration'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerEncryptionKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('foundationModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('idleSessionTTLInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('instruction'),
                    new \PHPStan\Type\Constant\ConstantStringType('memoryConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('orchestrationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('preparedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('promptOverrideConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUPERVISOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUPERVISOR_ROUTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_PREPARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('executor'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('guardrailIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabledMemoryTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionSummaryConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageDays'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('SESSION_SUMMARY'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maxRecentSessions'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_ORCHESTRATION'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('overrideLambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('promptConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('additionalModelRequestFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('basePromptTemplate'),
                            new \PHPStan\Type\Constant\ConstantStringType('foundationModel'),
                            new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('parserMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('promptCreationMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('promptState'),
                            new \PHPStan\Type\Constant\ConstantStringType('promptType'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('maximumLength'),
                                new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                new \PHPStan\Type\Constant\ConstantStringType('topK'),
                                new \PHPStan\Type\Constant\ConstantStringType('topP'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PRE_PROCESSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ORCHESTRATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('POST_PROCESSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE_RESPONSE_GENERATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEMORY_SUMMARIZATION'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateAgentActionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentActionGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupExecutor'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupState'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiSchema'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('functionSchema'),
                    new \PHPStan\Type\Constant\ConstantStringType('parentActionSignature'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('customControl'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('RETURN_CONTROL'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('payload'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3ObjectKey'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('functions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('requireConfirmation'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('required'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('string'),
                                    new \PHPStan\Type\Constant\ConstantStringType('number'),
                                    new \PHPStan\Type\Constant\ConstantStringType('integer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('boolean'),
                                    new \PHPStan\Type\Constant\ConstantStringType('array'),
                                ]),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON.UserInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON.CodeInterpreter'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateAgentAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentAlias'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasHistoryEvents'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasName'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentAliasStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('routingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('routingConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('startDate'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('provisionedThroughput'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISSOCIATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('provisionedThroughput'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateAgentCollaborator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentCollaborator'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentDescriptor'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationInstruction'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaboratorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('relayConversationHistory'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('aliasArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TO_COLLABORATOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateAgentKnowledgeBase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentKnowledgeBase'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseState'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataDeletionPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverSideEncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('vectorIngestionConfiguration'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RETAIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('confluenceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('salesforceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('sharePointConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('webConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('crawlerConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('filterConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('patternObjectFilter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('inclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('objectType'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATTERN'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                                new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostType'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostUrl'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH2_CLIENT_CREDENTIALS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('SAAS'),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('inclusionPrefixes'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('crawlerConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('filterConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('patternObjectFilter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('inclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('objectType'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATTERN'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                                new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostUrl'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('OAUTH2_CLIENT_CREDENTIALS'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('crawlerConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('filterConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('patternObjectFilter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('inclusionFilters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('objectType'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATTERN'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                                new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('domain'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostType'),
                                new \PHPStan\Type\Constant\ConstantStringType('siteUrls'),
                                new \PHPStan\Type\Constant\ConstantStringType('tenantId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH2_CLIENT_CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH2_SHAREPOINT_APP_ONLY_CLIENT_CREDENTIALS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('ONLINE'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLUENCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT_METADATA'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('crawlerConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('crawlerLimits'),
                                new \PHPStan\Type\Constant\ConstantStringType('exclusionFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('inclusionFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('scope'),
                                new \PHPStan\Type\Constant\ConstantStringType('userAgent'),
                                new \PHPStan\Type\Constant\ConstantStringType('userAgentHeader'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('maxPages'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HOST_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBDOMAINS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('urlConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('seedUrls'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_UNSUCCESSFUL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('chunkingConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('contextEnrichmentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('customTransformationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('parsingConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('chunkingStrategy'),
                            new \PHPStan\Type\Constant\ConstantStringType('fixedSizeChunkingConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('hierarchicalChunkingConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('semanticChunkingConfiguration'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FIXED_SIZE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIERARCHICAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                new \PHPStan\Type\Constant\ConstantStringType('overlapPercentage'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('levelConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('overlapTokens'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('breakpointPercentileThreshold'),
                                new \PHPStan\Type\Constant\ConstantStringType('bufferSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bedrockFoundationModelConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('enrichmentStrategyConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('method'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('CHUNK_ENTITY_EXTRACTION'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('BEDROCK_FOUNDATION_MODEL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('intermediateStorage'),
                            new \PHPStan\Type\Constant\ConstantStringType('transformations'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('stepToApply'),
                                new \PHPStan\Type\Constant\ConstantStringType('transformationFunction'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('POST_CHUNKING'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('transformationLambdaConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('lambdaArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bedrockDataAutomationConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('bedrockFoundationModelConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('parsingStrategy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('parsingModality'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('MULTIMODAL'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('parsingModality'),
                                new \PHPStan\Type\Constant\ConstantStringType('parsingPrompt'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('MULTIMODAL'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('parsingPromptText'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BEDROCK_FOUNDATION_MODEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEDROCK_DATA_AUTOMATION'),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('customerEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('definition'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connections'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodes'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('target'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('conditional'),
                            new \PHPStan\Type\Constant\ConstantStringType('data'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('condition'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceOutput'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetInput'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Data'),
                            new \PHPStan\Type\Constant\ConstantStringType('Conditional'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('agent'),
                            new \PHPStan\Type\Constant\ConstantStringType('collector'),
                            new \PHPStan\Type\Constant\ConstantStringType('condition'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('iterator'),
                            new \PHPStan\Type\Constant\ConstantStringType('knowledgeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaFunction'),
                            new \PHPStan\Type\Constant\ConstantStringType('lex'),
                            new \PHPStan\Type\Constant\ConstantStringType('output'),
                            new \PHPStan\Type\Constant\ConstantStringType('prompt'),
                            new \PHPStan\Type\Constant\ConstantStringType('retrieval'),
                            new \PHPStan\Type\Constant\ConstantStringType('storage'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('agentAliasArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('conditions'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('lambdaArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('botAliasArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('localeId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('inline'),
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('additionalModelRequestFields'),
                                        new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('templateConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                                new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                                new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                                new \PHPStan\Type\Constant\ConstantStringType('topP'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\FloatType(),
                                                new \PHPStan\Type\FloatType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('chat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                                                new \PHPStan\Type\Constant\ConstantStringType('messages'),
                                                new \PHPStan\Type\Constant\ConstantStringType('system'),
                                                new \PHPStan\Type\Constant\ConstantStringType('toolConfiguration'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('role'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                        ], [
                                                            new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('assistant'),
                                                    ]),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                    ]),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('toolChoice'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('tools'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('any'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('auto'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('tool'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('toolSpec'),
                                                    ], [
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                        ], [
                                                            new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                        ]),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('inputSchema'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                                                            ], [
                                                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                            ]),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('promptArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('serviceConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('serviceConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                new \PHPStan\Type\Constant\ConstantStringType('Object'),
                                new \PHPStan\Type\Constant\ConstantStringType('Array'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                new \PHPStan\Type\Constant\ConstantStringType('Object'),
                                new \PHPStan\Type\Constant\ConstantStringType('Array'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Input'),
                            new \PHPStan\Type\Constant\ConstantStringType('Output'),
                            new \PHPStan\Type\Constant\ConstantStringType('KnowledgeBase'),
                            new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lex'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prompt'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunction'),
                            new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                            new \PHPStan\Type\Constant\ConstantStringType('Agent'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retrieval'),
                            new \PHPStan\Type\Constant\ConstantStringType('Iterator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Collector'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Prepared'),
                    new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotPrepared'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateFlowAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('flowId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('routingConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('flowVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateKnowledgeBase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBase'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('storageConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kendraKnowledgeBaseConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('sqlKnowledgeBaseConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('vectorKnowledgeBaseConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kendraIndexArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('redshiftConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('queryEngineConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryGenerationConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('storageConfigurations'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('provisionedConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('serverlessConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('authConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('clusterIdentifier'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('databaseUser'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('usernamePasswordSecretArn'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME_PASSWORD'),
                                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('authConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('workgroupArn'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('usernamePasswordSecretArn'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME_PASSWORD'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SERVERLESS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('executionTimeoutSeconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('generationContext'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('curatedQueries'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tables'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('naturalLanguage'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sql'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('columns'),
                                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                                            new \PHPStan\Type\Constant\ConstantStringType('inclusion'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inclusion'),
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('EXCLUDE'),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EXCLUDE'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('awsDataCatalogConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redshiftConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('tableNames'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AWS_DATA_CATALOG'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VECTOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('KENDRA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('embeddingModelArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('embeddingModelConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('supplementalDataStorageConfiguration'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bedrockEmbeddingModelConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('embeddingDataType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FLOAT32'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('storageLocations'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_UNSUCCESSFUL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('mongoDbAtlasConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('neptuneAnalyticsConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('opensearchServerlessConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('pineconeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('rdsConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('redisEnterpriseCloudConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('collectionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('endpointServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('vectorIndexName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                                new \PHPStan\Type\Constant\ConstantStringType('vectorField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('graphArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('collectionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('vectorIndexName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                                new \PHPStan\Type\Constant\ConstantStringType('vectorField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connectionString'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('primaryKeyField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                                new \PHPStan\Type\Constant\ConstantStringType('vectorField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldMapping'),
                            new \PHPStan\Type\Constant\ConstantStringType('vectorIndexName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadataField'),
                                new \PHPStan\Type\Constant\ConstantStringType('textField'),
                                new \PHPStan\Type\Constant\ConstantStringType('vectorField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH_SERVERLESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PINECONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REDIS_ENTERPRISE_CLOUD'),
                            new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONGO_DB_ATLAS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEPTUNE_ANALYTICS'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updatePrompt(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('customerEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultVariant'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('variants'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalModelRequestFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('genAiResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agent'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('agentIdentifier'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                            new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                            new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                            new \PHPStan\Type\Constant\ConstantStringType('topP'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('chat'),
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('messages'),
                            new \PHPStan\Type\Constant\ConstantStringType('system'),
                            new \PHPStan\Type\Constant\ConstantStringType('toolConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('role'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('user'),
                                    new \PHPStan\Type\Constant\ConstantStringType('assistant'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('toolChoice'),
                                new \PHPStan\Type\Constant\ConstantStringType('tools'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('any'),
                                    new \PHPStan\Type\Constant\ConstantStringType('auto'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tool'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                                    new \PHPStan\Type\Constant\ConstantStringType('toolSpec'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                                        new \PHPStan\Type\Constant\ConstantStringType('inputSchema'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cachePoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('default'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function validateFlowDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('validations'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('details'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cyclicConnection'),
                        new \PHPStan\Type\Constant\ConstantStringType('duplicateConditionExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('duplicateConnections'),
                        new \PHPStan\Type\Constant\ConstantStringType('incompatibleConnectionDataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('malformedConditionExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('malformedNodeInputExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('mismatchedNodeInputType'),
                        new \PHPStan\Type\Constant\ConstantStringType('mismatchedNodeOutputType'),
                        new \PHPStan\Type\Constant\ConstantStringType('missingConnectionConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('missingDefaultCondition'),
                        new \PHPStan\Type\Constant\ConstantStringType('missingEndingNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('missingNodeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('missingNodeInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('missingNodeOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('missingStartingNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('multipleNodeInputConnections'),
                        new \PHPStan\Type\Constant\ConstantStringType('unfulfilledNodeInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknownConnectionCondition'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknownConnectionSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknownConnectionSourceOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknownConnectionTarget'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknownConnectionTargetInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknownNodeInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknownNodeOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('unreachableNode'),
                        new \PHPStan\Type\Constant\ConstantStringType('unsatisfiedConnectionConditions'),
                        new \PHPStan\Type\Constant\ConstantStringType('unspecified'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('target'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('condition'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expectedType'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                new \PHPStan\Type\Constant\ConstantStringType('Object'),
                                new \PHPStan\Type\Constant\ConstantStringType('Array'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expectedType'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                            new \PHPStan\Type\Constant\ConstantStringType('output'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                new \PHPStan\Type\Constant\ConstantStringType('Object'),
                                new \PHPStan\Type\Constant\ConstantStringType('Array'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                            new \PHPStan\Type\Constant\ConstantStringType('output'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                            new \PHPStan\Type\Constant\ConstantStringType('output'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('node'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Warning'),
                        new \PHPStan\Type\Constant\ConstantStringType('Error'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CyclicConnection'),
                        new \PHPStan\Type\Constant\ConstantStringType('DuplicateConnections'),
                        new \PHPStan\Type\Constant\ConstantStringType('DuplicateConditionExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnreachableNode'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownConnectionSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownConnectionSourceOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownConnectionTarget'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownConnectionTargetInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownConnectionCondition'),
                        new \PHPStan\Type\Constant\ConstantStringType('MalformedConditionExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('MalformedNodeInputExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('MismatchedNodeInputType'),
                        new \PHPStan\Type\Constant\ConstantStringType('MismatchedNodeOutputType'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncompatibleConnectionDataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingConnectionConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingDefaultCondition'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingEndingNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingNodeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingNodeInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingNodeOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingStartingNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('MultipleNodeInputConnections'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnfulfilledNodeInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnsatisfiedConnectionConditions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unspecified'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownNodeInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownNodeOutput'),
                    ]),
                ]),
            ]),
        ]);
    }
}