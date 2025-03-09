<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class QBusinessClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\QBusiness\QBusinessClient>
     */
    public function getClass(): string
    {
        return \Aws\QBusiness\QBusinessClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associatePermission',
            'batchDeleteDocument',
            'batchPutDocument',
            'cancelSubscription',
            'chatSync',
            'createApplication',
            'createDataAccessor',
            'createDataSource',
            'createIndex',
            'createPlugin',
            'createRetriever',
            'createSubscription',
            'createUser',
            'createWebExperience',
            'deleteApplication',
            'deleteAttachment',
            'deleteChatControlsConfiguration',
            'deleteConversation',
            'deleteDataAccessor',
            'deleteDataSource',
            'deleteGroup',
            'deleteIndex',
            'deletePlugin',
            'deleteRetriever',
            'deleteUser',
            'deleteWebExperience',
            'disassociatePermission',
            'getApplication',
            'getChatControlsConfiguration',
            'getDataAccessor',
            'getDataSource',
            'getGroup',
            'getIndex',
            'getMedia',
            'getPlugin',
            'getPolicy',
            'getRetriever',
            'getUser',
            'getWebExperience',
            'listApplications',
            'listAttachments',
            'listConversations',
            'listDataAccessors',
            'listDataSourceSyncJobs',
            'listDataSources',
            'listDocuments',
            'listGroups',
            'listIndices',
            'listMessages',
            'listPluginActions',
            'listPluginTypeActions',
            'listPluginTypeMetadata',
            'listPlugins',
            'listRetrievers',
            'listSubscriptions',
            'listTagsForResource',
            'listWebExperiences',
            'putFeedback',
            'putGroup',
            'searchRelevantContent',
            'startDataSourceSyncJob',
            'stopDataSourceSyncJob',
            'tagResource',
            'untagResource',
            'updateApplication',
            'updateChatControlsConfiguration',
            'updateDataAccessor',
            'updateDataSource',
            'updateIndex',
            'updatePlugin',
            'updateRetriever',
            'updateSubscription',
            'updateUser',
            'updateWebExperience',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associatePermission' => $this->associatePermission(),
            'batchDeleteDocument' => $this->batchDeleteDocument(),
            'batchPutDocument' => $this->batchPutDocument(),
            'cancelSubscription' => $this->cancelSubscription(),
            'chatSync' => $this->chatSync(),
            'createApplication' => $this->createApplication(),
            'createDataAccessor' => $this->createDataAccessor(),
            'createDataSource' => $this->createDataSource(),
            'createIndex' => $this->createIndex(),
            'createPlugin' => $this->createPlugin(),
            'createRetriever' => $this->createRetriever(),
            'createSubscription' => $this->createSubscription(),
            'createUser' => $this->createUser(),
            'createWebExperience' => $this->createWebExperience(),
            'deleteApplication' => $this->deleteApplication(),
            'deleteAttachment' => $this->deleteAttachment(),
            'deleteChatControlsConfiguration' => $this->deleteChatControlsConfiguration(),
            'deleteConversation' => $this->deleteConversation(),
            'deleteDataAccessor' => $this->deleteDataAccessor(),
            'deleteDataSource' => $this->deleteDataSource(),
            'deleteGroup' => $this->deleteGroup(),
            'deleteIndex' => $this->deleteIndex(),
            'deletePlugin' => $this->deletePlugin(),
            'deleteRetriever' => $this->deleteRetriever(),
            'deleteUser' => $this->deleteUser(),
            'deleteWebExperience' => $this->deleteWebExperience(),
            'disassociatePermission' => $this->disassociatePermission(),
            'getApplication' => $this->getApplication(),
            'getChatControlsConfiguration' => $this->getChatControlsConfiguration(),
            'getDataAccessor' => $this->getDataAccessor(),
            'getDataSource' => $this->getDataSource(),
            'getGroup' => $this->getGroup(),
            'getIndex' => $this->getIndex(),
            'getMedia' => $this->getMedia(),
            'getPlugin' => $this->getPlugin(),
            'getPolicy' => $this->getPolicy(),
            'getRetriever' => $this->getRetriever(),
            'getUser' => $this->getUser(),
            'getWebExperience' => $this->getWebExperience(),
            'listApplications' => $this->listApplications(),
            'listAttachments' => $this->listAttachments(),
            'listConversations' => $this->listConversations(),
            'listDataAccessors' => $this->listDataAccessors(),
            'listDataSourceSyncJobs' => $this->listDataSourceSyncJobs(),
            'listDataSources' => $this->listDataSources(),
            'listDocuments' => $this->listDocuments(),
            'listGroups' => $this->listGroups(),
            'listIndices' => $this->listIndices(),
            'listMessages' => $this->listMessages(),
            'listPluginActions' => $this->listPluginActions(),
            'listPluginTypeActions' => $this->listPluginTypeActions(),
            'listPluginTypeMetadata' => $this->listPluginTypeMetadata(),
            'listPlugins' => $this->listPlugins(),
            'listRetrievers' => $this->listRetrievers(),
            'listSubscriptions' => $this->listSubscriptions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listWebExperiences' => $this->listWebExperiences(),
            'putFeedback' => $this->putFeedback(),
            'putGroup' => $this->putGroup(),
            'searchRelevantContent' => $this->searchRelevantContent(),
            'startDataSourceSyncJob' => $this->startDataSourceSyncJob(),
            'stopDataSourceSyncJob' => $this->stopDataSourceSyncJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateApplication' => $this->updateApplication(),
            'updateChatControlsConfiguration' => $this->updateChatControlsConfiguration(),
            'updateDataAccessor' => $this->updateDataAccessor(),
            'updateDataSource' => $this->updateDataSource(),
            'updateIndex' => $this->updateIndex(),
            'updatePlugin' => $this->updatePlugin(),
            'updateRetriever' => $this->updateRetriever(),
            'updateSubscription' => $this->updateSubscription(),
            'updateUser' => $this->updateUser(),
            'updateWebExperience' => $this->updateWebExperience(),
        };
    }
    private function associatePermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statement'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function batchDeleteDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('failedDocuments'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                                new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceInactive'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                            ]),
                        ]),
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
                new \PHPStan\Type\Constant\ConstantStringType('failedDocuments'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                                new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceInactive'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function cancelSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('currentSubscription'),
                new \PHPStan\Type\Constant\ConstantStringType('nextSubscription'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Q_LITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('Q_BUSINESS'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Q_LITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('Q_BUSINESS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function chatSync(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('conversationId'),
                new \PHPStan\Type\Constant\ConstantStringType('systemMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('systemMessageId'),
                new \PHPStan\Type\Constant\ConstantStringType('userMessageId'),
                new \PHPStan\Type\Constant\ConstantStringType('actionReview'),
                new \PHPStan\Type\Constant\ConstantStringType('authChallengeRequest'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceAttributions'),
                new \PHPStan\Type\Constant\ConstantStringType('failedAttachments'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pluginId'),
                    new \PHPStan\Type\Constant\ConstantStringType('pluginType'),
                    new \PHPStan\Type\Constant\ConstantStringType('payload'),
                    new \PHPStan\Type\Constant\ConstantStringType('payloadFieldNameSeparator'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_NOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('JIRA'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZENDESK'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUICKSIGHT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICENOW_NOW_PLATFORM'),
                        new \PHPStan\Type\Constant\ConstantStringType('JIRA_CLOUD'),
                        new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE_CRM'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZENDESK_SUITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ATLASSIAN_CONFLUENCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GOOGLE_CALENDAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TEAMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_EXCHANGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAGERDUTY_ADVANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMARTSHEET'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASANA'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('displayOrder'),
                        new \PHPStan\Type\Constant\ConstantStringType('displayDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowedFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('arrayItemJsonSchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARRAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('displayValue'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('authorizationUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                        new \PHPStan\Type\Constant\ConstantStringType('snippet'),
                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                        new \PHPStan\Type\Constant\ConstantStringType('citationNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('textMessageSegments'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('beginOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('endOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('snippetExcerpt'),
                                new \PHPStan\Type\Constant\ConstantStringType('mediaId'),
                                new \PHPStan\Type\Constant\ConstantStringType('mediaMimeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceDetails'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('imageSourceDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('audioSourceDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('videoSourceDetails'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('mediaId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mediaMimeType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('mediaId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mediaMimeType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('startTimeMilliseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('endTimeMilliseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('audioExtractionType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TRANSCRIPT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SUMMARY'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('mediaId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mediaMimeType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('startTimeMilliseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('endTimeMilliseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('videoExtractionType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TRANSCRIPT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SUMMARY'),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('conversationId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                                new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceInactive'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('applicationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDataAccessor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataAccessorId'),
                new \PHPStan\Type\Constant\ConstantStringType('idcApplicationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('dataAccessorArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('dataSourceArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('indexId'),
                new \PHPStan\Type\Constant\ConstantStringType('indexArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPlugin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pluginId'),
                new \PHPStan\Type\Constant\ConstantStringType('pluginArn'),
                new \PHPStan\Type\Constant\ConstantStringType('buildStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function createRetriever(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('retrieverId'),
                new \PHPStan\Type\Constant\ConstantStringType('retrieverArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionId'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('currentSubscription'),
                new \PHPStan\Type\Constant\ConstantStringType('nextSubscription'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Q_LITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('Q_BUSINESS'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Q_LITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('Q_BUSINESS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createWebExperience(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('webExperienceId'),
                new \PHPStan\Type\Constant\ConstantStringType('webExperienceArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteChatControlsConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteConversation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDataAccessor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePlugin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRetriever(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteWebExperience(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociatePermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('applicationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('identityType'),
                new \PHPStan\Type\Constant\ConstantStringType('iamIdentityProviderArn'),
                new \PHPStan\Type\Constant\ConstantStringType('identityCenterApplicationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('error'),
                new \PHPStan\Type\Constant\ConstantStringType('attachmentsConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('qAppsConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('personalizationConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('autoSubscriptionConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('clientIdsForOIDC'),
                new \PHPStan\Type\Constant\ConstantStringType('quickSightConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM_IDP_SAML'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM_IDP_OIDC'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM_IDC'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_QUICKSIGHT_IDP'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceInactive'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('attachmentsControlMode'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('qAppsControlMode'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('personalizationControlMode'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('autoSubscribe'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultSubscriptionType'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Q_LITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('Q_BUSINESS'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clientNamespace'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getChatControlsConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('responseScope'),
                new \PHPStan\Type\Constant\ConstantStringType('orchestrationConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('blockedPhrases'),
                new \PHPStan\Type\Constant\ConstantStringType('topicConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('creatorModeConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE_CONTENT_ONLY'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXTENDED_KNOWLEDGE_ENABLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('control'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('blockedPhrases'),
                    new \PHPStan\Type\Constant\ConstantStringType('systemMessageOverride'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('exampleChatMessages'),
                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('includedUsersAndGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('excludedUsersAndGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('ruleType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ruleConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('userIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('userGroups'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('userIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('userGroups'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CONTENT_BLOCKER_RULE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONTENT_RETRIEVAL_RULE'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('contentBlockerRule'),
                                    new \PHPStan\Type\Constant\ConstantStringType('contentRetrievalRule'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('systemMessageOverride'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('eligibleDataSources'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('indexId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                    ]),
                                ]),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('creatorModeControl'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDataAccessor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                new \PHPStan\Type\Constant\ConstantStringType('dataAccessorId'),
                new \PHPStan\Type\Constant\ConstantStringType('dataAccessorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('idcApplicationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('principal'),
                new \PHPStan\Type\Constant\ConstantStringType('actionConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                        new \PHPStan\Type\Constant\ConstantStringType('filterConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('documentAttributeFilter'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('andAllFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('orAllFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('notFilter'),
                                new \PHPStan\Type\Constant\ConstantStringType('equalsTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('containsAll'),
                                new \PHPStan\Type\Constant\ConstantStringType('containsAny'),
                                new \PHPStan\Type\Constant\ConstantStringType('greaterThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('greaterThanOrEquals'),
                                new \PHPStan\Type\Constant\ConstantStringType('lessThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('lessThanOrEquals'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
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
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
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
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
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
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
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
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
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
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
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
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('indexId'),
                new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('dataSourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('syncSchedule'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('error'),
                new \PHPStan\Type\Constant\ConstantStringType('documentEnrichmentConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('mediaExtractionConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
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
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_CREATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceInactive'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('inlineConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('preExtractionHookConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('postExtractionHookConfiguration'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('condition'),
                            new \PHPStan\Type\Constant\ConstantStringType('target'),
                            new \PHPStan\Type\Constant\ConstantStringType('documentContentOperator'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('operator'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXISTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_EXISTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
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
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('attributeValueOperator'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('invocationCondition'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EXISTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EXISTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
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
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('invocationCondition'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EXISTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EXISTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
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
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('imageExtractionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('audioExtractionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('videoExtractionConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('imageExtractionStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('audioExtractionStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('videoExtractionStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusHistory'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorDetail'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceInactive'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorDetail'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                                new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceInactive'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                            ]),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('indexId'),
                new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                new \PHPStan\Type\Constant\ConstantStringType('indexArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('capacityConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('documentAttributeConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('error'),
                new \PHPStan\Type\Constant\ConstantStringType('indexStatistics'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTER'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('units'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('search'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRING_LIST'),
                            new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceInactive'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('textDocumentStatistics'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('indexedTextBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('indexedTextDocumentCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getMedia(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('mediaBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('mediaMimeType'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPlugin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('pluginId'),
                new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('serverUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('authConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('customPluginConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('buildStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('pluginArn'),
                new \PHPStan\Type\Constant\ConstantStringType('state'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SERVICE_NOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('JIRA'),
                    new \PHPStan\Type\Constant\ConstantStringType('ZENDESK'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUICKSIGHT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SERVICENOW_NOW_PLATFORM'),
                    new \PHPStan\Type\Constant\ConstantStringType('JIRA_CLOUD'),
                    new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE_CRM'),
                    new \PHPStan\Type\Constant\ConstantStringType('ZENDESK_SUITE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ATLASSIAN_CONFLUENCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('GOOGLE_CALENDAR'),
                    new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TEAMS'),
                    new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_EXCHANGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PAGERDUTY_ADVANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SMARTSHEET'),
                    new \PHPStan\Type\Constant\ConstantStringType('ASANA'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('basicAuthConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('oAuth2ClientCredentialConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('noAuthConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('idcAuthConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('secretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('secretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('authorizationUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('tokenUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('idcApplicationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiSchemaType'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiSchema'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('OPEN_API_V3'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('payload'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRetriever(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('retrieverId'),
                new \PHPStan\Type\Constant\ConstantStringType('retrieverArn'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NATIVE_INDEX'),
                    new \PHPStan\Type\Constant\ConstantStringType('KENDRA_INDEX'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('nativeIndexConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('kendraIndexConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('indexId'),
                        new \PHPStan\Type\Constant\ConstantStringType('boostingOverride'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('numberConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('stringConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('dateConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('stringListConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('boostingLevel'),
                                new \PHPStan\Type\Constant\ConstantStringType('boostingType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VERY_HIGH'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRIORITIZE_LARGER_VALUES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRIORITIZE_SMALLER_VALUES'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('boostingLevel'),
                                new \PHPStan\Type\Constant\ConstantStringType('attributeValueBoosting'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VERY_HIGH'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VERY_HIGH'),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('boostingLevel'),
                                new \PHPStan\Type\Constant\ConstantStringType('boostingDurationInSeconds'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VERY_HIGH'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('boostingLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VERY_HIGH'),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('indexId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userAliases'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('indexId'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getWebExperience(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('webExperienceId'),
                new \PHPStan\Type\Constant\ConstantStringType('webExperienceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('title'),
                new \PHPStan\Type\Constant\ConstantStringType('subtitle'),
                new \PHPStan\Type\Constant\ConstantStringType('welcomeMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('samplePromptsControlMode'),
                new \PHPStan\Type\Constant\ConstantStringType('origins'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('identityProviderConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('authenticationConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('error'),
                new \PHPStan\Type\Constant\ConstantStringType('browserExtensionConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('customizationConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_AUTH_CONFIG'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('samlConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('openIDConnectConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authenticationUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('secretsArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('secretsRole'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('samlConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('metadataXML'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('userIdAttribute'),
                        new \PHPStan\Type\Constant\ConstantStringType('userGroupAttribute'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceInactive'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enabledBrowserExtensions'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FIREFOX'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHROME'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('customCSSUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('logoUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('fontUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('faviconUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('applications'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('identityType'),
                        new \PHPStan\Type\Constant\ConstantStringType('quickSightConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM_IDP_SAML'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM_IDP_OIDC'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM_IDC'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_QUICKSIGHT_IDP'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('clientNamespace'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listAttachments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('conversationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('copyFrom'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('md5chksum'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('conversation'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('conversationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                                new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceInactive'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listConversations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('conversations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('conversationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listDataAccessors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataAccessors'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataAccessorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataAccessorArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('idcApplicationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('principal'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDataSourceSyncJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('history'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('executionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('metrics'),
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
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                                new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceInactive'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('documentsAdded'),
                            new \PHPStan\Type\Constant\ConstantStringType('documentsModified'),
                            new \PHPStan\Type\Constant\ConstantStringType('documentsDeleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('documentsFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('documentsScanned'),
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
                new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_CREATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDocuments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('documentDetailList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('documentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RECEIVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INDEXED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_FAILED_TO_INDEX'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                                new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceInactive'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                            ]),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listIndices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('indices'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('indexId'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        ]),
                    ]),
                ])),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('messageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('body'),
                        new \PHPStan\Type\Constant\ConstantStringType('time'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceAttribution'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionReview'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionExecution'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('error'),
                                new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('conversationId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ResourceInactive'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('title'),
                                new \PHPStan\Type\Constant\ConstantStringType('snippet'),
                                new \PHPStan\Type\Constant\ConstantStringType('url'),
                                new \PHPStan\Type\Constant\ConstantStringType('citationNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('textMessageSegments'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('beginOffset'),
                                        new \PHPStan\Type\Constant\ConstantStringType('endOffset'),
                                        new \PHPStan\Type\Constant\ConstantStringType('snippetExcerpt'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mediaId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mediaMimeType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sourceDetails'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('imageSourceDetails'),
                                            new \PHPStan\Type\Constant\ConstantStringType('audioSourceDetails'),
                                            new \PHPStan\Type\Constant\ConstantStringType('videoSourceDetails'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('mediaId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('mediaMimeType'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('mediaId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('mediaMimeType'),
                                                new \PHPStan\Type\Constant\ConstantStringType('startTimeMilliseconds'),
                                                new \PHPStan\Type\Constant\ConstantStringType('endTimeMilliseconds'),
                                                new \PHPStan\Type\Constant\ConstantStringType('audioExtractionType'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('TRANSCRIPT'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SUMMARY'),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('mediaId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('mediaMimeType'),
                                                new \PHPStan\Type\Constant\ConstantStringType('startTimeMilliseconds'),
                                                new \PHPStan\Type\Constant\ConstantStringType('endTimeMilliseconds'),
                                                new \PHPStan\Type\Constant\ConstantStringType('videoExtractionType'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('TRANSCRIPT'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SUMMARY'),
                                                ]),
                                            ]),
                                        ]),
                                    ]),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pluginId'),
                            new \PHPStan\Type\Constant\ConstantStringType('pluginType'),
                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                            new \PHPStan\Type\Constant\ConstantStringType('payloadFieldNameSeparator'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_NOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('JIRA'),
                                new \PHPStan\Type\Constant\ConstantStringType('ZENDESK'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUICKSIGHT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICENOW_NOW_PLATFORM'),
                                new \PHPStan\Type\Constant\ConstantStringType('JIRA_CLOUD'),
                                new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE_CRM'),
                                new \PHPStan\Type\Constant\ConstantStringType('ZENDESK_SUITE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ATLASSIAN_CONFLUENCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GOOGLE_CALENDAR'),
                                new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TEAMS'),
                                new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_EXCHANGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PAGERDUTY_ADVANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SMARTSHEET'),
                                new \PHPStan\Type\Constant\ConstantStringType('ASANA'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                                new \PHPStan\Type\Constant\ConstantStringType('displayOrder'),
                                new \PHPStan\Type\Constant\ConstantStringType('displayDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('arrayItemJsonSchema'),
                                new \PHPStan\Type\Constant\ConstantStringType('required'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARRAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('displayValue'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pluginId'),
                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                            new \PHPStan\Type\Constant\ConstantStringType('payloadFieldNameSeparator'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPluginActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actionIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('instructionExample'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listPluginTypeActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actionIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('instructionExample'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listPluginTypeMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('category'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_NOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('JIRA'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZENDESK'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUICKSIGHT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICENOW_NOW_PLATFORM'),
                            new \PHPStan\Type\Constant\ConstantStringType('JIRA_CLOUD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE_CRM'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZENDESK_SUITE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATLASSIAN_CONFLUENCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GOOGLE_CALENDAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TEAMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_EXCHANGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGERDUTY_ADVANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SMARTSHEET'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASANA'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Customer relationship management (CRM)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Project management'),
                            new \PHPStan\Type\Constant\ConstantStringType('Communication'),
                            new \PHPStan\Type\Constant\ConstantStringType('Productivity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ticketing and incident management'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listPlugins(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('plugins'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('pluginId'),
                        new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('serverUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_NOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('JIRA'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZENDESK'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUICKSIGHT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICENOW_NOW_PLATFORM'),
                            new \PHPStan\Type\Constant\ConstantStringType('JIRA_CLOUD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE_CRM'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZENDESK_SUITE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATLASSIAN_CONFLUENCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GOOGLE_CALENDAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TEAMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_EXCHANGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGERDUTY_ADVANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SMARTSHEET'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASANA'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listRetrievers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('retrievers'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('retrieverId'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NATIVE_INDEX'),
                            new \PHPStan\Type\Constant\ConstantStringType('KENDRA_INDEX'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSubscriptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subscriptionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('subscriptionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('principal'),
                        new \PHPStan\Type\Constant\ConstantStringType('currentSubscription'),
                        new \PHPStan\Type\Constant\ConstantStringType('nextSubscription'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('user'),
                            new \PHPStan\Type\Constant\ConstantStringType('group'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Q_LITE'),
                                new \PHPStan\Type\Constant\ConstantStringType('Q_BUSINESS'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Q_LITE'),
                                new \PHPStan\Type\Constant\ConstantStringType('Q_BUSINESS'),
                            ]),
                        ]),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listWebExperiences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('webExperiences'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('webExperienceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_AUTH_CONFIG'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putFeedback(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function searchRelevantContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('relevantContent'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('documentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('documentTitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('documentUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('documentAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('scoreAttributes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('scoreConfidence'),
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
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startDataSourceSyncJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('executionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopDataSourceSyncJob(): ?\PHPStan\Type\Type
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
    private function updateApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateChatControlsConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateDataAccessor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updatePlugin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateRetriever(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('currentSubscription'),
                new \PHPStan\Type\Constant\ConstantStringType('nextSubscription'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Q_LITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('Q_BUSINESS'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Q_LITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('Q_BUSINESS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userAliasesAdded'),
                new \PHPStan\Type\Constant\ConstantStringType('userAliasesUpdated'),
                new \PHPStan\Type\Constant\ConstantStringType('userAliasesDeleted'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('indexId'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('indexId'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('indexId'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function updateWebExperience(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}