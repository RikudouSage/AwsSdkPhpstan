<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class QConnectClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\QConnect\QConnectClient>
     */
    public function getClass(): string
    {
        return \Aws\QConnect\QConnectClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'activateMessageTemplate',
            'createAIAgent',
            'createAIAgentVersion',
            'createAIGuardrail',
            'createAIGuardrailVersion',
            'createAIPrompt',
            'createAIPromptVersion',
            'createAssistant',
            'createAssistantAssociation',
            'createContent',
            'createContentAssociation',
            'createKnowledgeBase',
            'createMessageTemplate',
            'createMessageTemplateAttachment',
            'createMessageTemplateVersion',
            'createQuickResponse',
            'createSession',
            'deactivateMessageTemplate',
            'deleteAIAgent',
            'deleteAIAgentVersion',
            'deleteAIGuardrail',
            'deleteAIGuardrailVersion',
            'deleteAIPrompt',
            'deleteAIPromptVersion',
            'deleteAssistant',
            'deleteAssistantAssociation',
            'deleteContent',
            'deleteContentAssociation',
            'deleteImportJob',
            'deleteKnowledgeBase',
            'deleteMessageTemplate',
            'deleteMessageTemplateAttachment',
            'deleteQuickResponse',
            'getAIAgent',
            'getAIGuardrail',
            'getAIPrompt',
            'getAssistant',
            'getAssistantAssociation',
            'getContent',
            'getContentAssociation',
            'getContentSummary',
            'getImportJob',
            'getKnowledgeBase',
            'getMessageTemplate',
            'getNextMessage',
            'getQuickResponse',
            'getRecommendations',
            'getSession',
            'listAIAgentVersions',
            'listAIAgents',
            'listAIGuardrailVersions',
            'listAIGuardrails',
            'listAIPromptVersions',
            'listAIPrompts',
            'listAssistantAssociations',
            'listAssistants',
            'listContentAssociations',
            'listContents',
            'listImportJobs',
            'listKnowledgeBases',
            'listMessageTemplateVersions',
            'listMessageTemplates',
            'listMessages',
            'listQuickResponses',
            'listTagsForResource',
            'notifyRecommendationsReceived',
            'putFeedback',
            'queryAssistant',
            'removeAssistantAIAgent',
            'removeKnowledgeBaseTemplateUri',
            'renderMessageTemplate',
            'searchContent',
            'searchMessageTemplates',
            'searchQuickResponses',
            'searchSessions',
            'sendMessage',
            'startContentUpload',
            'startImportJob',
            'tagResource',
            'untagResource',
            'updateAIAgent',
            'updateAIGuardrail',
            'updateAIPrompt',
            'updateAssistantAIAgent',
            'updateContent',
            'updateKnowledgeBaseTemplateUri',
            'updateMessageTemplate',
            'updateMessageTemplateMetadata',
            'updateQuickResponse',
            'updateSession',
            'updateSessionData',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'activateMessageTemplate' => $this->activateMessageTemplate(),
            'createAIAgent' => $this->createAIAgent(),
            'createAIAgentVersion' => $this->createAIAgentVersion(),
            'createAIGuardrail' => $this->createAIGuardrail(),
            'createAIGuardrailVersion' => $this->createAIGuardrailVersion(),
            'createAIPrompt' => $this->createAIPrompt(),
            'createAIPromptVersion' => $this->createAIPromptVersion(),
            'createAssistant' => $this->createAssistant(),
            'createAssistantAssociation' => $this->createAssistantAssociation(),
            'createContent' => $this->createContent(),
            'createContentAssociation' => $this->createContentAssociation(),
            'createKnowledgeBase' => $this->createKnowledgeBase(),
            'createMessageTemplate' => $this->createMessageTemplate(),
            'createMessageTemplateAttachment' => $this->createMessageTemplateAttachment(),
            'createMessageTemplateVersion' => $this->createMessageTemplateVersion(),
            'createQuickResponse' => $this->createQuickResponse(),
            'createSession' => $this->createSession(),
            'deactivateMessageTemplate' => $this->deactivateMessageTemplate(),
            'deleteAIAgent' => $this->deleteAIAgent(),
            'deleteAIAgentVersion' => $this->deleteAIAgentVersion(),
            'deleteAIGuardrail' => $this->deleteAIGuardrail(),
            'deleteAIGuardrailVersion' => $this->deleteAIGuardrailVersion(),
            'deleteAIPrompt' => $this->deleteAIPrompt(),
            'deleteAIPromptVersion' => $this->deleteAIPromptVersion(),
            'deleteAssistant' => $this->deleteAssistant(),
            'deleteAssistantAssociation' => $this->deleteAssistantAssociation(),
            'deleteContent' => $this->deleteContent(),
            'deleteContentAssociation' => $this->deleteContentAssociation(),
            'deleteImportJob' => $this->deleteImportJob(),
            'deleteKnowledgeBase' => $this->deleteKnowledgeBase(),
            'deleteMessageTemplate' => $this->deleteMessageTemplate(),
            'deleteMessageTemplateAttachment' => $this->deleteMessageTemplateAttachment(),
            'deleteQuickResponse' => $this->deleteQuickResponse(),
            'getAIAgent' => $this->getAIAgent(),
            'getAIGuardrail' => $this->getAIGuardrail(),
            'getAIPrompt' => $this->getAIPrompt(),
            'getAssistant' => $this->getAssistant(),
            'getAssistantAssociation' => $this->getAssistantAssociation(),
            'getContent' => $this->getContent(),
            'getContentAssociation' => $this->getContentAssociation(),
            'getContentSummary' => $this->getContentSummary(),
            'getImportJob' => $this->getImportJob(),
            'getKnowledgeBase' => $this->getKnowledgeBase(),
            'getMessageTemplate' => $this->getMessageTemplate(),
            'getNextMessage' => $this->getNextMessage(),
            'getQuickResponse' => $this->getQuickResponse(),
            'getRecommendations' => $this->getRecommendations(),
            'getSession' => $this->getSession(),
            'listAIAgentVersions' => $this->listAIAgentVersions(),
            'listAIAgents' => $this->listAIAgents(),
            'listAIGuardrailVersions' => $this->listAIGuardrailVersions(),
            'listAIGuardrails' => $this->listAIGuardrails(),
            'listAIPromptVersions' => $this->listAIPromptVersions(),
            'listAIPrompts' => $this->listAIPrompts(),
            'listAssistantAssociations' => $this->listAssistantAssociations(),
            'listAssistants' => $this->listAssistants(),
            'listContentAssociations' => $this->listContentAssociations(),
            'listContents' => $this->listContents(),
            'listImportJobs' => $this->listImportJobs(),
            'listKnowledgeBases' => $this->listKnowledgeBases(),
            'listMessageTemplateVersions' => $this->listMessageTemplateVersions(),
            'listMessageTemplates' => $this->listMessageTemplates(),
            'listMessages' => $this->listMessages(),
            'listQuickResponses' => $this->listQuickResponses(),
            'listTagsForResource' => $this->listTagsForResource(),
            'notifyRecommendationsReceived' => $this->notifyRecommendationsReceived(),
            'putFeedback' => $this->putFeedback(),
            'queryAssistant' => $this->queryAssistant(),
            'removeAssistantAIAgent' => $this->removeAssistantAIAgent(),
            'removeKnowledgeBaseTemplateUri' => $this->removeKnowledgeBaseTemplateUri(),
            'renderMessageTemplate' => $this->renderMessageTemplate(),
            'searchContent' => $this->searchContent(),
            'searchMessageTemplates' => $this->searchMessageTemplates(),
            'searchQuickResponses' => $this->searchQuickResponses(),
            'searchSessions' => $this->searchSessions(),
            'sendMessage' => $this->sendMessage(),
            'startContentUpload' => $this->startContentUpload(),
            'startImportJob' => $this->startImportJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAIAgent' => $this->updateAIAgent(),
            'updateAIGuardrail' => $this->updateAIGuardrail(),
            'updateAIPrompt' => $this->updateAIPrompt(),
            'updateAssistantAIAgent' => $this->updateAssistantAIAgent(),
            'updateContent' => $this->updateContent(),
            'updateKnowledgeBaseTemplateUri' => $this->updateKnowledgeBaseTemplateUri(),
            'updateMessageTemplate' => $this->updateMessageTemplate(),
            'updateMessageTemplateMetadata' => $this->updateMessageTemplateMetadata(),
            'updateQuickResponse' => $this->updateQuickResponse(),
            'updateSession' => $this->updateSession(),
            'updateSessionData' => $this->updateSessionData(),
        };
    }
    private function activateMessageTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('messageTemplateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('messageTemplateId'),
                new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function createAIAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiAgent'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('origin'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('answerRecommendationAIAgentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('manualSearchAIAgentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('selfServiceAIAgentConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIGuardrailId'),
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('intentLabelingGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('locale'),
                            new \PHPStan\Type\Constant\ConstantStringType('queryReformulationAIPromptId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIGuardrailId'),
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('locale'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('selfServiceAIGuardrailId'),
                            new \PHPStan\Type\Constant\ConstantStringType('selfServiceAnswerGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('selfServicePreProcessingAIPromptId'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL_SEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_RECOMMENDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createAIAgentVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiAgent'),
                new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('origin'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('answerRecommendationAIAgentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('manualSearchAIAgentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('selfServiceAIAgentConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIGuardrailId'),
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('intentLabelingGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('locale'),
                            new \PHPStan\Type\Constant\ConstantStringType('queryReformulationAIPromptId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIGuardrailId'),
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('locale'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('selfServiceAIGuardrailId'),
                            new \PHPStan\Type\Constant\ConstantStringType('selfServiceAnswerGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('selfServicePreProcessingAIPromptId'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL_SEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_RECOMMENDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function createAIGuardrail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiGuardrail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiGuardrailArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aiGuardrailId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('blockedInputMessaging'),
                    new \PHPStan\Type\Constant\ConstantStringType('blockedOutputsMessaging'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentPolicyConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('contextualGroundingPolicyConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicyConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('topicPolicyConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('wordPolicyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filtersConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('inputStrength'),
                            new \PHPStan\Type\Constant\ConstantStringType('outputStrength'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SEXUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('VIOLENCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('HATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSULTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISCONDUCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROMPT_ATTACK'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filtersConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GROUNDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RELEVANCE'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('piiEntitiesConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('regexesConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_ACCESS_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_SECRET_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CA_HEALTH_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CA_SOCIAL_INSURANCE_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_CVV'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_EXPIRY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('DRIVER_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNATIONAL_BANK_ACCOUNT_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LICENSE_PLATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAC_ADDRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                                new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('SWIFT_CODE'),
                                new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_HEALTH_SERVICE_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_INSURANCE_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ACCOUNT_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ROUTING_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_PASSPORT_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_SOCIAL_SECURITY_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('VEHICLE_IDENTIFICATION_NUMBER'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topicsConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('definition'),
                            new \PHPStan\Type\Constant\ConstantStringType('examples'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('managedWordListsConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('wordsConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('PROFANITY'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createAIGuardrailVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiGuardrail'),
                new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiGuardrailArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aiGuardrailId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('blockedInputMessaging'),
                    new \PHPStan\Type\Constant\ConstantStringType('blockedOutputsMessaging'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentPolicyConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('contextualGroundingPolicyConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicyConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('topicPolicyConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('wordPolicyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filtersConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('inputStrength'),
                            new \PHPStan\Type\Constant\ConstantStringType('outputStrength'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SEXUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('VIOLENCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('HATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSULTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISCONDUCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROMPT_ATTACK'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filtersConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GROUNDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RELEVANCE'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('piiEntitiesConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('regexesConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_ACCESS_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_SECRET_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CA_HEALTH_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CA_SOCIAL_INSURANCE_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_CVV'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_EXPIRY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('DRIVER_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNATIONAL_BANK_ACCOUNT_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LICENSE_PLATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAC_ADDRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                                new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('SWIFT_CODE'),
                                new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_HEALTH_SERVICE_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_INSURANCE_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ACCOUNT_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ROUTING_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_PASSPORT_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_SOCIAL_SECURITY_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('VEHICLE_IDENTIFICATION_NUMBER'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topicsConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('definition'),
                            new \PHPStan\Type\Constant\ConstantStringType('examples'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('managedWordListsConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('wordsConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('PROFANITY'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function createAIPrompt(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiPrompt'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiPromptArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aiPromptId'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('origin'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANTHROPIC_CLAUDE_MESSAGES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANTHROPIC_CLAUDE_TEXT_COMPLETIONS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('textFullAIPromptEditTemplateConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTENT_LABELING_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY_REFORMULATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE_PRE_PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE_ANSWER_GENERATION'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createAIPromptVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiPrompt'),
                new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiPromptArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aiPromptId'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('origin'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANTHROPIC_CLAUDE_MESSAGES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANTHROPIC_CLAUDE_TEXT_COMPLETIONS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('textFullAIPromptEditTemplateConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTENT_LABELING_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY_REFORMULATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE_PRE_PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE_ANSWER_GENERATION'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function createAssistant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assistant'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('capabilityConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('integrationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverSideEncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL_SEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_RECOMMENDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('aiAgentId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('V1'),
                            new \PHPStan\Type\Constant\ConstantStringType('V2'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topicIntegrationArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                ]),
            ]),
        ]);
    }
    private function createAssistantAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assistantAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantAssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationData'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('content'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('contentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('linkOutUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                    new \PHPStan\Type\Constant\ConstantStringType('urlExpiry'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createContentAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contentAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('associationData'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentAssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('amazonConnectGuideAssociation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('flowId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_CONNECT_GUIDE'),
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
    private function createKnowledgeBase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBase'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ingestionFailureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('ingestionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastContentModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('renderingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverSideEncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('vectorIngestionConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYNC_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYNCING_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYNC_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUICK_RESPONSES'),
                        new \PHPStan\Type\Constant\ConstantStringType('MESSAGE_TEMPLATES'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANAGED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('templateUri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('appIntegrations'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedSourceConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('appIntegrationArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('objectFields'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('webCrawlerConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('crawlerLimits'),
                                new \PHPStan\Type\Constant\ConstantStringType('exclusionFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('inclusionFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('scope'),
                                new \PHPStan\Type\Constant\ConstantStringType('urlConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HOST_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBDOMAINS'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('seedUrls'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('chunkingConfiguration'),
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
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ])),
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
                            new \PHPStan\Type\Constant\ConstantStringType('parsingStrategy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('parsingPrompt'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('parsingPromptText'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('BEDROCK_FOUNDATION_MODEL'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createMessageTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('messageTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('attributeTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('channelSubtype'),
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('language'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateContentSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_PROFILE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                        new \PHPStan\Type\Constant\ConstantStringType('sms'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                            new \PHPStan\Type\Constant\ConstantStringType('headers'),
                            new \PHPStan\Type\Constant\ConstantStringType('subject'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('html'),
                                new \PHPStan\Type\Constant\ConstantStringType('plainText'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('plainText'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('customAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('customerProfileAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('systemAttributes'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('additionalInformation'),
                            new \PHPStan\Type\Constant\ConstantStringType('address1'),
                            new \PHPStan\Type\Constant\ConstantStringType('address2'),
                            new \PHPStan\Type\Constant\ConstantStringType('address3'),
                            new \PHPStan\Type\Constant\ConstantStringType('address4'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress1'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress2'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress3'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress4'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingCity'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingCountry'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingCounty'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingPostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingProvince'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingState'),
                            new \PHPStan\Type\Constant\ConstantStringType('birthDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('businessEmailAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('businessName'),
                            new \PHPStan\Type\Constant\ConstantStringType('businessPhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('city'),
                            new \PHPStan\Type\Constant\ConstantStringType('country'),
                            new \PHPStan\Type\Constant\ConstantStringType('county'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                            new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                            new \PHPStan\Type\Constant\ConstantStringType('gender'),
                            new \PHPStan\Type\Constant\ConstantStringType('homePhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress1'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress2'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress3'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress4'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingCity'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingCountry'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingCounty'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingPostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingProvince'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingState'),
                            new \PHPStan\Type\Constant\ConstantStringType('middleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('mobilePhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('partyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('phoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('postalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('profileARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('profileId'),
                            new \PHPStan\Type\Constant\ConstantStringType('province'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress1'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress2'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress3'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress4'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingCity'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingCountry'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingCounty'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingPostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingProvince'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingState'),
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
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
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('customerEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('systemEndpoint'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('address'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('address'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('criteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createMessageTemplateAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('attachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentDisposition'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('uploadedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                    new \PHPStan\Type\Constant\ConstantStringType('urlExpiry'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createMessageTemplateVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('messageTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributeTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('channelSubtype'),
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('isActive'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('language'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateContentSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('contentDisposition'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('uploadedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                        new \PHPStan\Type\Constant\ConstantStringType('urlExpiry'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_PROFILE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                        new \PHPStan\Type\Constant\ConstantStringType('sms'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                            new \PHPStan\Type\Constant\ConstantStringType('headers'),
                            new \PHPStan\Type\Constant\ConstantStringType('subject'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('html'),
                                new \PHPStan\Type\Constant\ConstantStringType('plainText'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('plainText'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('customAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('customerProfileAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('systemAttributes'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('additionalInformation'),
                            new \PHPStan\Type\Constant\ConstantStringType('address1'),
                            new \PHPStan\Type\Constant\ConstantStringType('address2'),
                            new \PHPStan\Type\Constant\ConstantStringType('address3'),
                            new \PHPStan\Type\Constant\ConstantStringType('address4'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress1'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress2'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress3'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress4'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingCity'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingCountry'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingCounty'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingPostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingProvince'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingState'),
                            new \PHPStan\Type\Constant\ConstantStringType('birthDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('businessEmailAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('businessName'),
                            new \PHPStan\Type\Constant\ConstantStringType('businessPhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('city'),
                            new \PHPStan\Type\Constant\ConstantStringType('country'),
                            new \PHPStan\Type\Constant\ConstantStringType('county'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                            new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                            new \PHPStan\Type\Constant\ConstantStringType('gender'),
                            new \PHPStan\Type\Constant\ConstantStringType('homePhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress1'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress2'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress3'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress4'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingCity'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingCountry'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingCounty'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingPostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingProvince'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingState'),
                            new \PHPStan\Type\Constant\ConstantStringType('middleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('mobilePhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('partyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('phoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('postalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('profileARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('profileId'),
                            new \PHPStan\Type\Constant\ConstantStringType('province'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress1'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress2'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress3'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress4'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingCity'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingCountry'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingCounty'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingPostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingProvince'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingState'),
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
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
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('customerEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('systemEndpoint'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('address'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('address'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('criteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createQuickResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('quickResponse'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('channels'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('contents'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('isActive'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('language'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('quickResponseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('quickResponseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('shortcutKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('markdown'),
                        new \PHPStan\Type\Constant\ConstantStringType('plainText'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('criteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\BooleanType(),
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
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('session'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('integrationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tagFilter'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL_SEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_RECOMMENDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('aiAgentId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topicIntegrationArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                        new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                        new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function deactivateMessageTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('messageTemplateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('messageTemplateId'),
                new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function deleteAIAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAIAgentVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAIGuardrail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAIGuardrailVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAIPrompt(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAIPromptVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAssistant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAssistantAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteContentAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteKnowledgeBase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteMessageTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteMessageTemplateAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteQuickResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAIAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiAgent'),
                new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('origin'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('answerRecommendationAIAgentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('manualSearchAIAgentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('selfServiceAIAgentConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIGuardrailId'),
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('intentLabelingGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('locale'),
                            new \PHPStan\Type\Constant\ConstantStringType('queryReformulationAIPromptId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIGuardrailId'),
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('locale'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('selfServiceAIGuardrailId'),
                            new \PHPStan\Type\Constant\ConstantStringType('selfServiceAnswerGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('selfServicePreProcessingAIPromptId'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL_SEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_RECOMMENDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getAIGuardrail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiGuardrail'),
                new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiGuardrailArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aiGuardrailId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('blockedInputMessaging'),
                    new \PHPStan\Type\Constant\ConstantStringType('blockedOutputsMessaging'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentPolicyConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('contextualGroundingPolicyConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicyConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('topicPolicyConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('wordPolicyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filtersConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('inputStrength'),
                            new \PHPStan\Type\Constant\ConstantStringType('outputStrength'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SEXUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('VIOLENCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('HATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSULTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISCONDUCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROMPT_ATTACK'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filtersConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GROUNDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RELEVANCE'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('piiEntitiesConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('regexesConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_ACCESS_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_SECRET_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CA_HEALTH_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CA_SOCIAL_INSURANCE_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_CVV'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_EXPIRY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('DRIVER_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNATIONAL_BANK_ACCOUNT_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LICENSE_PLATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAC_ADDRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                                new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('SWIFT_CODE'),
                                new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_HEALTH_SERVICE_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_INSURANCE_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ACCOUNT_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ROUTING_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_PASSPORT_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_SOCIAL_SECURITY_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('VEHICLE_IDENTIFICATION_NUMBER'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topicsConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('definition'),
                            new \PHPStan\Type\Constant\ConstantStringType('examples'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('managedWordListsConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('wordsConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('PROFANITY'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getAIPrompt(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiPrompt'),
                new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiPromptArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aiPromptId'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('origin'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANTHROPIC_CLAUDE_MESSAGES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANTHROPIC_CLAUDE_TEXT_COMPLETIONS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('textFullAIPromptEditTemplateConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTENT_LABELING_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY_REFORMULATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE_PRE_PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE_ANSWER_GENERATION'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getAssistant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assistant'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('capabilityConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('integrationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverSideEncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL_SEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_RECOMMENDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('aiAgentId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('V1'),
                            new \PHPStan\Type\Constant\ConstantStringType('V2'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topicIntegrationArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                ]),
            ]),
        ]);
    }
    private function getAssistantAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assistantAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantAssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationData'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('content'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('contentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('linkOutUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                    new \PHPStan\Type\Constant\ConstantStringType('urlExpiry'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getContentAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contentAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('associationData'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentAssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('amazonConnectGuideAssociation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('flowId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_CONNECT_GUIDE'),
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
    private function getContentSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contentSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('contentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('importJob'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalSourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('failedRecordReport'),
                    new \PHPStan\Type\Constant\ConstantStringType('importJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('importJobType'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('uploadId'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                    new \PHPStan\Type\Constant\ConstantStringType('urlExpiry'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connectConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_CONNECT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('QUICK_RESPONSES'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('START_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ingestionFailureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('ingestionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastContentModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('renderingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverSideEncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('vectorIngestionConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYNC_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYNCING_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYNC_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUICK_RESPONSES'),
                        new \PHPStan\Type\Constant\ConstantStringType('MESSAGE_TEMPLATES'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANAGED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('templateUri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('appIntegrations'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedSourceConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('appIntegrationArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('objectFields'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('webCrawlerConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('crawlerLimits'),
                                new \PHPStan\Type\Constant\ConstantStringType('exclusionFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('inclusionFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('scope'),
                                new \PHPStan\Type\Constant\ConstantStringType('urlConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HOST_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBDOMAINS'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('seedUrls'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('chunkingConfiguration'),
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
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ])),
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
                            new \PHPStan\Type\Constant\ConstantStringType('parsingStrategy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('parsingPrompt'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('parsingPromptText'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('BEDROCK_FOUNDATION_MODEL'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getMessageTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('messageTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributeTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('channelSubtype'),
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('isActive'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('language'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateContentSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('contentDisposition'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('uploadedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                        new \PHPStan\Type\Constant\ConstantStringType('urlExpiry'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_PROFILE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                        new \PHPStan\Type\Constant\ConstantStringType('sms'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                            new \PHPStan\Type\Constant\ConstantStringType('headers'),
                            new \PHPStan\Type\Constant\ConstantStringType('subject'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('html'),
                                new \PHPStan\Type\Constant\ConstantStringType('plainText'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('plainText'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('customAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('customerProfileAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('systemAttributes'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('additionalInformation'),
                            new \PHPStan\Type\Constant\ConstantStringType('address1'),
                            new \PHPStan\Type\Constant\ConstantStringType('address2'),
                            new \PHPStan\Type\Constant\ConstantStringType('address3'),
                            new \PHPStan\Type\Constant\ConstantStringType('address4'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress1'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress2'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress3'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress4'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingCity'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingCountry'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingCounty'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingPostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingProvince'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingState'),
                            new \PHPStan\Type\Constant\ConstantStringType('birthDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('businessEmailAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('businessName'),
                            new \PHPStan\Type\Constant\ConstantStringType('businessPhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('city'),
                            new \PHPStan\Type\Constant\ConstantStringType('country'),
                            new \PHPStan\Type\Constant\ConstantStringType('county'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                            new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                            new \PHPStan\Type\Constant\ConstantStringType('gender'),
                            new \PHPStan\Type\Constant\ConstantStringType('homePhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress1'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress2'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress3'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress4'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingCity'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingCountry'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingCounty'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingPostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingProvince'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingState'),
                            new \PHPStan\Type\Constant\ConstantStringType('middleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('mobilePhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('partyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('phoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('postalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('profileARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('profileId'),
                            new \PHPStan\Type\Constant\ConstantStringType('province'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress1'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress2'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress3'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress4'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingCity'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingCountry'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingCounty'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingPostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingProvince'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingState'),
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
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
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('customerEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('systemEndpoint'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('address'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('address'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('criteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getNextMessage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('conversationSessionData'),
                new \PHPStan\Type\Constant\ConstantStringType('conversationState'),
                new \PHPStan\Type\Constant\ConstantStringType('nextMessageToken'),
                new \PHPStan\Type\Constant\ConstantStringType('requestMessageId'),
                new \PHPStan\Type\Constant\ConstantStringType('response'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('participant'),
                    new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOT'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
            ]),
        ]);
    }
    private function getQuickResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('quickResponse'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('channels'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('contents'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('isActive'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('language'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('quickResponseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('quickResponseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('shortcutKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('markdown'),
                        new \PHPStan\Type\Constant\ConstantStringType('plainText'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('criteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\BooleanType(),
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
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('recommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('triggers'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('data'),
                    new \PHPStan\Type\Constant\ConstantStringType('document'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('relevanceLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('relevanceScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                        new \PHPStan\Type\Constant\ConstantStringType('reference'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contentData'),
                            new \PHPStan\Type\Constant\ConstantStringType('generativeData'),
                            new \PHPStan\Type\Constant\ConstantStringType('intentDetectedData'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceContentData'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('rankingData'),
                                new \PHPStan\Type\Constant\ConstantStringType('textData'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('relevanceLevel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('relevanceScore'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('excerpt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('highlights'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('beginOffsetInclusive'),
                                            new \PHPStan\Type\Constant\ConstantStringType('endOffsetExclusive'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('highlights'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('beginOffsetInclusive'),
                                            new \PHPStan\Type\Constant\ConstantStringType('endOffsetExclusive'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('completion'),
                                new \PHPStan\Type\Constant\ConstantStringType('rankingData'),
                                new \PHPStan\Type\Constant\ConstantStringType('references'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('relevanceLevel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('relevanceScore'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('intent'),
                                new \PHPStan\Type\Constant\ConstantStringType('intentId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('citationSpan'),
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('rankingData'),
                                new \PHPStan\Type\Constant\ConstantStringType('textData'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('beginOffsetInclusive'),
                                    new \PHPStan\Type\Constant\ConstantStringType('endOffsetExclusive'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('relevanceLevel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('relevanceScore'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('excerpt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('highlights'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('beginOffsetInclusive'),
                                            new \PHPStan\Type\Constant\ConstantStringType('endOffsetExclusive'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('highlights'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('beginOffsetInclusive'),
                                            new \PHPStan\Type\Constant\ConstantStringType('endOffsetExclusive'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_CONTENT'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contentReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('generativeReference'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('contentArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('contentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                                new \PHPStan\Type\Constant\ConstantStringType('referenceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceURL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('WEB_CRAWLER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('generationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('excerpt'),
                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contentArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('contentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                            new \PHPStan\Type\Constant\ConstantStringType('referenceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceURL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WEB_CRAWLER'),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('highlights'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('beginOffsetInclusive'),
                                new \PHPStan\Type\Constant\ConstantStringType('endOffsetExclusive'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('highlights'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('beginOffsetInclusive'),
                                new \PHPStan\Type\Constant\ConstantStringType('endOffsetExclusive'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_CONTENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('GENERATIVE_RESPONSE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GENERATIVE_ANSWER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DETECTED_INTENT'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('data'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('query'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ISSUE_DETECTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RULE_EVALUATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('GENERATIVE'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('session'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('integrationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tagFilter'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL_SEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_RECOMMENDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('aiAgentId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topicIntegrationArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                        new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                        new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function listAIAgentVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiAgentVersionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('aiAgentArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('aiAgentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('origin'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('answerRecommendationAIAgentConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('manualSearchAIAgentConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('selfServiceAIAgentConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIGuardrailId'),
                                new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIPromptId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('intentLabelingGenerationAIPromptId'),
                                new \PHPStan\Type\Constant\ConstantStringType('locale'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryReformulationAIPromptId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                            new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                            new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                                ], [
                                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                    ])),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIGuardrailId'),
                                new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIPromptId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('locale'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                            new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                            new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                                ], [
                                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                    ])),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('selfServiceAIGuardrailId'),
                                new \PHPStan\Type\Constant\ConstantStringType('selfServiceAnswerGenerationAIPromptId'),
                                new \PHPStan\Type\Constant\ConstantStringType('selfServicePreProcessingAIPromptId'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                            new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                            new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                                ], [
                                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                    ])),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL_SEARCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANSWER_RECOMMENDATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAIAgents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiAgentSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('origin'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('answerRecommendationAIAgentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('manualSearchAIAgentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('selfServiceAIAgentConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIGuardrailId'),
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('intentLabelingGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('locale'),
                            new \PHPStan\Type\Constant\ConstantStringType('queryReformulationAIPromptId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIGuardrailId'),
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('locale'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('selfServiceAIGuardrailId'),
                            new \PHPStan\Type\Constant\ConstantStringType('selfServiceAnswerGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('selfServicePreProcessingAIPromptId'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL_SEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_RECOMMENDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAIGuardrailVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiGuardrailVersionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiGuardrailSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('aiGuardrailArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('aiGuardrailId'),
                        new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAIGuardrails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiGuardrailSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiGuardrailArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aiGuardrailId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAIPromptVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiPromptVersionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiPromptSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('aiPromptArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('aiPromptId'),
                        new \PHPStan\Type\Constant\ConstantStringType('apiFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('origin'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ANTHROPIC_CLAUDE_MESSAGES'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANTHROPIC_CLAUDE_TEXT_COMPLETIONS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ANSWER_GENERATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTENT_LABELING_GENERATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUERY_REFORMULATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE_PRE_PROCESSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE_ANSWER_GENERATION'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAIPrompts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiPromptSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiPromptArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aiPromptId'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('origin'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANTHROPIC_CLAUDE_MESSAGES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANTHROPIC_CLAUDE_TEXT_COMPLETIONS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTENT_LABELING_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY_REFORMULATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE_PRE_PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE_ANSWER_GENERATION'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssistantAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assistantAssociationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantAssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationData'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssistants(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assistantSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('capabilityConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('integrationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverSideEncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL_SEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_RECOMMENDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('aiAgentId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('V1'),
                            new \PHPStan\Type\Constant\ConstantStringType('V2'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topicIntegrationArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listContentAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contentAssociationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('associationData'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentAssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('amazonConnectGuideAssociation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('flowId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_CONNECT_GUIDE'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listContents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contentSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('contentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('importJobSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalSourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('importJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('importJobType'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('uploadId'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connectConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_CONNECT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('QUICK_RESPONSES'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('START_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('renderingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverSideEncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('vectorIngestionConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUICK_RESPONSES'),
                        new \PHPStan\Type\Constant\ConstantStringType('MESSAGE_TEMPLATES'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANAGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('templateUri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('appIntegrations'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedSourceConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('appIntegrationArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('objectFields'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('webCrawlerConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('crawlerLimits'),
                                new \PHPStan\Type\Constant\ConstantStringType('exclusionFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('inclusionFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('scope'),
                                new \PHPStan\Type\Constant\ConstantStringType('urlConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HOST_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBDOMAINS'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('seedUrls'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('chunkingConfiguration'),
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
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ])),
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
                            new \PHPStan\Type\Constant\ConstantStringType('parsingStrategy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('parsingPrompt'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('parsingPromptText'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('BEDROCK_FOUNDATION_MODEL'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMessageTemplateVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('messageTemplateVersionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('channelSubtype'),
                    new \PHPStan\Type\Constant\ConstantStringType('isActive'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMessageTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('messageTemplateSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('activeVersionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('channelSubtype'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMessages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('messages'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('participant'),
                    new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOT'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listQuickResponses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('quickResponseSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('channels'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('isActive'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('quickResponseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('quickResponseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
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
    private function notifyRecommendationsReceived(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
                new \PHPStan\Type\Constant\ConstantStringType('recommendationIds'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function putFeedback(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                new \PHPStan\Type\Constant\ConstantStringType('contentFeedback'),
                new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                new \PHPStan\Type\Constant\ConstantStringType('targetType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('generativeContentFeedbackData'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('relevance'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HELPFUL'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_HELPFUL'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RECOMMENDATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESULT'),
                ]),
            ]),
        ]);
    }
    private function queryAssistant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('results'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('data'),
                    new \PHPStan\Type\Constant\ConstantStringType('document'),
                    new \PHPStan\Type\Constant\ConstantStringType('relevanceScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('resultId'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                        new \PHPStan\Type\Constant\ConstantStringType('reference'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contentData'),
                            new \PHPStan\Type\Constant\ConstantStringType('generativeData'),
                            new \PHPStan\Type\Constant\ConstantStringType('intentDetectedData'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceContentData'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('rankingData'),
                                new \PHPStan\Type\Constant\ConstantStringType('textData'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('relevanceLevel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('relevanceScore'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('excerpt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('highlights'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('beginOffsetInclusive'),
                                            new \PHPStan\Type\Constant\ConstantStringType('endOffsetExclusive'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('highlights'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('beginOffsetInclusive'),
                                            new \PHPStan\Type\Constant\ConstantStringType('endOffsetExclusive'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('completion'),
                                new \PHPStan\Type\Constant\ConstantStringType('rankingData'),
                                new \PHPStan\Type\Constant\ConstantStringType('references'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('relevanceLevel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('relevanceScore'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('intent'),
                                new \PHPStan\Type\Constant\ConstantStringType('intentId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('citationSpan'),
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('rankingData'),
                                new \PHPStan\Type\Constant\ConstantStringType('textData'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('beginOffsetInclusive'),
                                    new \PHPStan\Type\Constant\ConstantStringType('endOffsetExclusive'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('relevanceLevel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('relevanceScore'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('excerpt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('highlights'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('beginOffsetInclusive'),
                                            new \PHPStan\Type\Constant\ConstantStringType('endOffsetExclusive'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('highlights'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('beginOffsetInclusive'),
                                            new \PHPStan\Type\Constant\ConstantStringType('endOffsetExclusive'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_CONTENT'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contentReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('generativeReference'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('contentArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('contentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                                new \PHPStan\Type\Constant\ConstantStringType('referenceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceURL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('WEB_CRAWLER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('generationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('excerpt'),
                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contentArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('contentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                            new \PHPStan\Type\Constant\ConstantStringType('referenceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceURL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WEB_CRAWLER'),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('highlights'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('beginOffsetInclusive'),
                                new \PHPStan\Type\Constant\ConstantStringType('endOffsetExclusive'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('highlights'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('beginOffsetInclusive'),
                                new \PHPStan\Type\Constant\ConstantStringType('endOffsetExclusive'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_CONTENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTENT_ANSWER'),
                        new \PHPStan\Type\Constant\ConstantStringType('GENERATIVE_ANSWER'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function removeAssistantAIAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removeKnowledgeBaseTemplateUri(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function renderMessageTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                new \PHPStan\Type\Constant\ConstantStringType('attributesNotInterpolated'),
                new \PHPStan\Type\Constant\ConstantStringType('content'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentDisposition'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('uploadedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                    new \PHPStan\Type\Constant\ConstantStringType('urlExpiry'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('email'),
                    new \PHPStan\Type\Constant\ConstantStringType('sms'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('body'),
                        new \PHPStan\Type\Constant\ConstantStringType('headers'),
                        new \PHPStan\Type\Constant\ConstantStringType('subject'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('html'),
                            new \PHPStan\Type\Constant\ConstantStringType('plainText'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('body'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('plainText'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function searchContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contentSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('contentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchMessageTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('results'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('channelSubtype'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('isActive'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('language'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('criteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                ])),
            ]),
        ]);
    }
    private function searchQuickResponses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('results'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('attributesInterpolated'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributesNotInterpolated'),
                    new \PHPStan\Type\Constant\ConstantStringType('channels'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('contents'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('isActive'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('language'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('quickResponseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('quickResponseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('shortcutKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('markdown'),
                        new \PHPStan\Type\Constant\ConstantStringType('plainText'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('criteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\BooleanType(),
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
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function searchSessions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function sendMessage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextMessageToken'),
                new \PHPStan\Type\Constant\ConstantStringType('requestMessageId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startContentUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('headersToInclude'),
                new \PHPStan\Type\Constant\ConstantStringType('uploadId'),
                new \PHPStan\Type\Constant\ConstantStringType('url'),
                new \PHPStan\Type\Constant\ConstantStringType('urlExpiry'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function startImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('importJob'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalSourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('failedRecordReport'),
                    new \PHPStan\Type\Constant\ConstantStringType('importJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('importJobType'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('uploadId'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                    new \PHPStan\Type\Constant\ConstantStringType('urlExpiry'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connectConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_CONNECT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('QUICK_RESPONSES'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('START_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function updateAIAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiAgent'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('origin'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('answerRecommendationAIAgentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('manualSearchAIAgentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('selfServiceAIAgentConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIGuardrailId'),
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('intentLabelingGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('locale'),
                            new \PHPStan\Type\Constant\ConstantStringType('queryReformulationAIPromptId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIGuardrailId'),
                            new \PHPStan\Type\Constant\ConstantStringType('answerGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('locale'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('associationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('selfServiceAIGuardrailId'),
                            new \PHPStan\Type\Constant\ConstantStringType('selfServiceAnswerGenerationAIPromptId'),
                            new \PHPStan\Type\Constant\ConstantStringType('selfServicePreProcessingAIPromptId'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('associationConfigurationData'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseAssociationConfigurationData'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('contentTagFilter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideKnowledgeBaseSearchType'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                                                new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL_SEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_RECOMMENDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateAIGuardrail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiGuardrail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiGuardrailArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aiGuardrailId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('blockedInputMessaging'),
                    new \PHPStan\Type\Constant\ConstantStringType('blockedOutputsMessaging'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentPolicyConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('contextualGroundingPolicyConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicyConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('topicPolicyConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('wordPolicyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filtersConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('inputStrength'),
                            new \PHPStan\Type\Constant\ConstantStringType('outputStrength'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SEXUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('VIOLENCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('HATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSULTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISCONDUCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROMPT_ATTACK'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filtersConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GROUNDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RELEVANCE'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('piiEntitiesConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('regexesConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_ACCESS_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_SECRET_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CA_HEALTH_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CA_SOCIAL_INSURANCE_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_CVV'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_EXPIRY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('DRIVER_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNATIONAL_BANK_ACCOUNT_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LICENSE_PLATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAC_ADDRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                                new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('SWIFT_CODE'),
                                new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_HEALTH_SERVICE_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_INSURANCE_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ACCOUNT_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ROUTING_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_PASSPORT_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('US_SOCIAL_SECURITY_NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('VEHICLE_IDENTIFICATION_NUMBER'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topicsConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('definition'),
                            new \PHPStan\Type\Constant\ConstantStringType('examples'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('managedWordListsConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('wordsConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('PROFANITY'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateAIPrompt(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aiPrompt'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiPromptArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aiPromptId'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('origin'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANTHROPIC_CLAUDE_MESSAGES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANTHROPIC_CLAUDE_TEXT_COMPLETIONS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('textFullAIPromptEditTemplateConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTENT_LABELING_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY_REFORMULATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE_PRE_PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE_ANSWER_GENERATION'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateAssistantAIAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assistant'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assistantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('capabilityConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('integrationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverSideEncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL_SEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_RECOMMENDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('aiAgentId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('V1'),
                            new \PHPStan\Type\Constant\ConstantStringType('V2'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topicIntegrationArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                ]),
            ]),
        ]);
    }
    private function updateContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('content'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('contentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('linkOutUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                    new \PHPStan\Type\Constant\ConstantStringType('urlExpiry'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateKnowledgeBaseTemplateUri(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBase'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ingestionFailureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('ingestionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastContentModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('renderingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverSideEncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('vectorIngestionConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYNC_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYNCING_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYNC_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUICK_RESPONSES'),
                        new \PHPStan\Type\Constant\ConstantStringType('MESSAGE_TEMPLATES'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANAGED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('templateUri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('appIntegrations'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedSourceConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('appIntegrationArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('objectFields'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('webCrawlerConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('crawlerLimits'),
                                new \PHPStan\Type\Constant\ConstantStringType('exclusionFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('inclusionFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('scope'),
                                new \PHPStan\Type\Constant\ConstantStringType('urlConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HOST_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBDOMAINS'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('seedUrls'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('chunkingConfiguration'),
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
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ])),
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
                            new \PHPStan\Type\Constant\ConstantStringType('parsingStrategy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('parsingPrompt'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('parsingPromptText'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('BEDROCK_FOUNDATION_MODEL'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateMessageTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('messageTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('attributeTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('channelSubtype'),
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('language'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateContentSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_PROFILE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                        new \PHPStan\Type\Constant\ConstantStringType('sms'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                            new \PHPStan\Type\Constant\ConstantStringType('headers'),
                            new \PHPStan\Type\Constant\ConstantStringType('subject'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('html'),
                                new \PHPStan\Type\Constant\ConstantStringType('plainText'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('plainText'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('customAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('customerProfileAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('systemAttributes'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('additionalInformation'),
                            new \PHPStan\Type\Constant\ConstantStringType('address1'),
                            new \PHPStan\Type\Constant\ConstantStringType('address2'),
                            new \PHPStan\Type\Constant\ConstantStringType('address3'),
                            new \PHPStan\Type\Constant\ConstantStringType('address4'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress1'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress2'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress3'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress4'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingCity'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingCountry'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingCounty'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingPostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingProvince'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingState'),
                            new \PHPStan\Type\Constant\ConstantStringType('birthDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('businessEmailAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('businessName'),
                            new \PHPStan\Type\Constant\ConstantStringType('businessPhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('city'),
                            new \PHPStan\Type\Constant\ConstantStringType('country'),
                            new \PHPStan\Type\Constant\ConstantStringType('county'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                            new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                            new \PHPStan\Type\Constant\ConstantStringType('gender'),
                            new \PHPStan\Type\Constant\ConstantStringType('homePhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress1'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress2'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress3'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress4'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingCity'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingCountry'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingCounty'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingPostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingProvince'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingState'),
                            new \PHPStan\Type\Constant\ConstantStringType('middleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('mobilePhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('partyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('phoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('postalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('profileARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('profileId'),
                            new \PHPStan\Type\Constant\ConstantStringType('province'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress1'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress2'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress3'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress4'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingCity'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingCountry'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingCounty'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingPostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingProvince'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingState'),
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
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
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('customerEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('systemEndpoint'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('address'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('address'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('criteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function updateMessageTemplateMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('messageTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('attributeTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('channelSubtype'),
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('language'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateContentSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_PROFILE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                        new \PHPStan\Type\Constant\ConstantStringType('sms'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                            new \PHPStan\Type\Constant\ConstantStringType('headers'),
                            new \PHPStan\Type\Constant\ConstantStringType('subject'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('html'),
                                new \PHPStan\Type\Constant\ConstantStringType('plainText'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('plainText'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('customAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('customerProfileAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('systemAttributes'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('additionalInformation'),
                            new \PHPStan\Type\Constant\ConstantStringType('address1'),
                            new \PHPStan\Type\Constant\ConstantStringType('address2'),
                            new \PHPStan\Type\Constant\ConstantStringType('address3'),
                            new \PHPStan\Type\Constant\ConstantStringType('address4'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress1'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress2'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress3'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingAddress4'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingCity'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingCountry'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingCounty'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingPostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingProvince'),
                            new \PHPStan\Type\Constant\ConstantStringType('billingState'),
                            new \PHPStan\Type\Constant\ConstantStringType('birthDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('businessEmailAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('businessName'),
                            new \PHPStan\Type\Constant\ConstantStringType('businessPhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('city'),
                            new \PHPStan\Type\Constant\ConstantStringType('country'),
                            new \PHPStan\Type\Constant\ConstantStringType('county'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                            new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                            new \PHPStan\Type\Constant\ConstantStringType('gender'),
                            new \PHPStan\Type\Constant\ConstantStringType('homePhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress1'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress2'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress3'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingAddress4'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingCity'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingCountry'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingCounty'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingPostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingProvince'),
                            new \PHPStan\Type\Constant\ConstantStringType('mailingState'),
                            new \PHPStan\Type\Constant\ConstantStringType('middleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('mobilePhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('partyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('phoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('postalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('profileARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('profileId'),
                            new \PHPStan\Type\Constant\ConstantStringType('province'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress1'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress2'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress3'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingAddress4'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingCity'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingCountry'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingCounty'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingPostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingProvince'),
                            new \PHPStan\Type\Constant\ConstantStringType('shippingState'),
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
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
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('customerEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('systemEndpoint'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('address'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('address'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('criteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function updateQuickResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('quickResponse'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('channels'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('contents'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('isActive'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('language'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('quickResponseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('quickResponseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('shortcutKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('markdown'),
                        new \PHPStan\Type\Constant\ConstantStringType('plainText'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('criteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\BooleanType(),
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
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function updateSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('session'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aiAgentConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('integrationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tagFilter'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL_SEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER_RECOMMENDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_SERVICE'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('aiAgentId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topicIntegrationArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                        new \PHPStan\Type\Constant\ConstantStringType('orConditions'),
                        new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('andConditions'),
                            new \PHPStan\Type\Constant\ConstantStringType('tagCondition'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function updateSessionData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('data'),
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}