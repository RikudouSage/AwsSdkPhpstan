<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ConnectClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Connect\ConnectClient>
     */
    public function getClass(): string
    {
        return \Aws\Connect\ConnectClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'activateEvaluationForm',
            'associateAnalyticsDataSet',
            'associateApprovedOrigin',
            'associateBot',
            'associateDefaultVocabulary',
            'associateFlow',
            'associateInstanceStorageConfig',
            'associateLambdaFunction',
            'associateLexBot',
            'associatePhoneNumberContactFlow',
            'associateQueueQuickConnects',
            'associateRoutingProfileQueues',
            'associateSecurityKey',
            'associateTrafficDistributionGroupUser',
            'associateUserProficiencies',
            'batchAssociateAnalyticsDataSet',
            'batchDisassociateAnalyticsDataSet',
            'batchGetAttachedFileMetadata',
            'batchGetFlowAssociation',
            'batchPutContact',
            'claimPhoneNumber',
            'completeAttachedFileUpload',
            'createAgentStatus',
            'createContact',
            'createContactFlow',
            'createContactFlowModule',
            'createContactFlowVersion',
            'createEmailAddress',
            'createEvaluationForm',
            'createHoursOfOperation',
            'createHoursOfOperationOverride',
            'createInstance',
            'createIntegrationAssociation',
            'createParticipant',
            'createPersistentContactAssociation',
            'createPredefinedAttribute',
            'createPrompt',
            'createPushNotificationRegistration',
            'createQueue',
            'createQuickConnect',
            'createRoutingProfile',
            'createRule',
            'createSecurityProfile',
            'createTaskTemplate',
            'createTrafficDistributionGroup',
            'createUseCase',
            'createUser',
            'createUserHierarchyGroup',
            'createView',
            'createViewVersion',
            'createVocabulary',
            'deactivateEvaluationForm',
            'deleteAttachedFile',
            'deleteContactEvaluation',
            'deleteContactFlow',
            'deleteContactFlowModule',
            'deleteContactFlowVersion',
            'deleteEmailAddress',
            'deleteEvaluationForm',
            'deleteHoursOfOperation',
            'deleteHoursOfOperationOverride',
            'deleteInstance',
            'deleteIntegrationAssociation',
            'deletePredefinedAttribute',
            'deletePrompt',
            'deletePushNotificationRegistration',
            'deleteQueue',
            'deleteQuickConnect',
            'deleteRoutingProfile',
            'deleteRule',
            'deleteSecurityProfile',
            'deleteTaskTemplate',
            'deleteTrafficDistributionGroup',
            'deleteUseCase',
            'deleteUser',
            'deleteUserHierarchyGroup',
            'deleteView',
            'deleteViewVersion',
            'deleteVocabulary',
            'describeAgentStatus',
            'describeAuthenticationProfile',
            'describeContact',
            'describeContactEvaluation',
            'describeContactFlow',
            'describeContactFlowModule',
            'describeEmailAddress',
            'describeEvaluationForm',
            'describeHoursOfOperation',
            'describeHoursOfOperationOverride',
            'describeInstance',
            'describeInstanceAttribute',
            'describeInstanceStorageConfig',
            'describePhoneNumber',
            'describePredefinedAttribute',
            'describePrompt',
            'describeQueue',
            'describeQuickConnect',
            'describeRoutingProfile',
            'describeRule',
            'describeSecurityProfile',
            'describeTrafficDistributionGroup',
            'describeUser',
            'describeUserHierarchyGroup',
            'describeUserHierarchyStructure',
            'describeView',
            'describeVocabulary',
            'disassociateAnalyticsDataSet',
            'disassociateApprovedOrigin',
            'disassociateBot',
            'disassociateFlow',
            'disassociateInstanceStorageConfig',
            'disassociateLambdaFunction',
            'disassociateLexBot',
            'disassociatePhoneNumberContactFlow',
            'disassociateQueueQuickConnects',
            'disassociateRoutingProfileQueues',
            'disassociateSecurityKey',
            'disassociateTrafficDistributionGroupUser',
            'disassociateUserProficiencies',
            'dismissUserContact',
            'getAttachedFile',
            'getContactAttributes',
            'getCurrentMetricData',
            'getCurrentUserData',
            'getEffectiveHoursOfOperations',
            'getFederationToken',
            'getFlowAssociation',
            'getMetricData',
            'getMetricDataV2',
            'getPromptFile',
            'getTaskTemplate',
            'getTrafficDistribution',
            'importPhoneNumber',
            'listAgentStatuses',
            'listAnalyticsDataAssociations',
            'listAnalyticsDataLakeDataSets',
            'listApprovedOrigins',
            'listAssociatedContacts',
            'listAuthenticationProfiles',
            'listBots',
            'listContactEvaluations',
            'listContactFlowModules',
            'listContactFlowVersions',
            'listContactFlows',
            'listContactReferences',
            'listDefaultVocabularies',
            'listEvaluationFormVersions',
            'listEvaluationForms',
            'listFlowAssociations',
            'listHoursOfOperationOverrides',
            'listHoursOfOperations',
            'listInstanceAttributes',
            'listInstanceStorageConfigs',
            'listInstances',
            'listIntegrationAssociations',
            'listLambdaFunctions',
            'listLexBots',
            'listPhoneNumbers',
            'listPhoneNumbersV2',
            'listPredefinedAttributes',
            'listPrompts',
            'listQueueQuickConnects',
            'listQueues',
            'listQuickConnects',
            'listRealtimeContactAnalysisSegmentsV2',
            'listRoutingProfileQueues',
            'listRoutingProfiles',
            'listRules',
            'listSecurityKeys',
            'listSecurityProfileApplications',
            'listSecurityProfilePermissions',
            'listSecurityProfiles',
            'listTagsForResource',
            'listTaskTemplates',
            'listTrafficDistributionGroupUsers',
            'listTrafficDistributionGroups',
            'listUseCases',
            'listUserHierarchyGroups',
            'listUserProficiencies',
            'listUsers',
            'listViewVersions',
            'listViews',
            'monitorContact',
            'pauseContact',
            'putUserStatus',
            'releasePhoneNumber',
            'replicateInstance',
            'resumeContact',
            'resumeContactRecording',
            'searchAgentStatuses',
            'searchAvailablePhoneNumbers',
            'searchContactFlowModules',
            'searchContactFlows',
            'searchContacts',
            'searchEmailAddresses',
            'searchHoursOfOperationOverrides',
            'searchHoursOfOperations',
            'searchPredefinedAttributes',
            'searchPrompts',
            'searchQueues',
            'searchQuickConnects',
            'searchResourceTags',
            'searchRoutingProfiles',
            'searchSecurityProfiles',
            'searchUserHierarchyGroups',
            'searchUsers',
            'searchVocabularies',
            'sendChatIntegrationEvent',
            'sendOutboundEmail',
            'startAttachedFileUpload',
            'startChatContact',
            'startContactEvaluation',
            'startContactRecording',
            'startContactStreaming',
            'startEmailContact',
            'startOutboundChatContact',
            'startOutboundEmailContact',
            'startOutboundVoiceContact',
            'startScreenSharing',
            'startTaskContact',
            'startWebRTCContact',
            'stopContact',
            'stopContactRecording',
            'stopContactStreaming',
            'submitContactEvaluation',
            'suspendContactRecording',
            'tagContact',
            'tagResource',
            'transferContact',
            'untagContact',
            'untagResource',
            'updateAgentStatus',
            'updateAuthenticationProfile',
            'updateContact',
            'updateContactAttributes',
            'updateContactEvaluation',
            'updateContactFlowContent',
            'updateContactFlowMetadata',
            'updateContactFlowModuleContent',
            'updateContactFlowModuleMetadata',
            'updateContactFlowName',
            'updateContactRoutingData',
            'updateContactSchedule',
            'updateEmailAddressMetadata',
            'updateEvaluationForm',
            'updateHoursOfOperation',
            'updateHoursOfOperationOverride',
            'updateInstanceAttribute',
            'updateInstanceStorageConfig',
            'updateParticipantAuthentication',
            'updateParticipantRoleConfig',
            'updatePhoneNumber',
            'updatePhoneNumberMetadata',
            'updatePredefinedAttribute',
            'updatePrompt',
            'updateQueueHoursOfOperation',
            'updateQueueMaxContacts',
            'updateQueueName',
            'updateQueueOutboundCallerConfig',
            'updateQueueOutboundEmailConfig',
            'updateQueueStatus',
            'updateQuickConnectConfig',
            'updateQuickConnectName',
            'updateRoutingProfileAgentAvailabilityTimer',
            'updateRoutingProfileConcurrency',
            'updateRoutingProfileDefaultOutboundQueue',
            'updateRoutingProfileName',
            'updateRoutingProfileQueues',
            'updateRule',
            'updateSecurityProfile',
            'updateTaskTemplate',
            'updateTrafficDistribution',
            'updateUserHierarchy',
            'updateUserHierarchyGroupName',
            'updateUserHierarchyStructure',
            'updateUserIdentityInfo',
            'updateUserPhoneConfig',
            'updateUserProficiencies',
            'updateUserRoutingProfile',
            'updateUserSecurityProfiles',
            'updateViewContent',
            'updateViewMetadata',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'activateEvaluationForm' => $this->activateEvaluationForm(),
            'associateAnalyticsDataSet' => $this->associateAnalyticsDataSet(),
            'associateApprovedOrigin' => $this->associateApprovedOrigin(),
            'associateBot' => $this->associateBot(),
            'associateDefaultVocabulary' => $this->associateDefaultVocabulary(),
            'associateFlow' => $this->associateFlow(),
            'associateInstanceStorageConfig' => $this->associateInstanceStorageConfig(),
            'associateLambdaFunction' => $this->associateLambdaFunction(),
            'associateLexBot' => $this->associateLexBot(),
            'associatePhoneNumberContactFlow' => $this->associatePhoneNumberContactFlow(),
            'associateQueueQuickConnects' => $this->associateQueueQuickConnects(),
            'associateRoutingProfileQueues' => $this->associateRoutingProfileQueues(),
            'associateSecurityKey' => $this->associateSecurityKey(),
            'associateTrafficDistributionGroupUser' => $this->associateTrafficDistributionGroupUser(),
            'associateUserProficiencies' => $this->associateUserProficiencies(),
            'batchAssociateAnalyticsDataSet' => $this->batchAssociateAnalyticsDataSet(),
            'batchDisassociateAnalyticsDataSet' => $this->batchDisassociateAnalyticsDataSet(),
            'batchGetAttachedFileMetadata' => $this->batchGetAttachedFileMetadata(),
            'batchGetFlowAssociation' => $this->batchGetFlowAssociation(),
            'batchPutContact' => $this->batchPutContact(),
            'claimPhoneNumber' => $this->claimPhoneNumber(),
            'completeAttachedFileUpload' => $this->completeAttachedFileUpload(),
            'createAgentStatus' => $this->createAgentStatus(),
            'createContact' => $this->createContact(),
            'createContactFlow' => $this->createContactFlow(),
            'createContactFlowModule' => $this->createContactFlowModule(),
            'createContactFlowVersion' => $this->createContactFlowVersion(),
            'createEmailAddress' => $this->createEmailAddress(),
            'createEvaluationForm' => $this->createEvaluationForm(),
            'createHoursOfOperation' => $this->createHoursOfOperation(),
            'createHoursOfOperationOverride' => $this->createHoursOfOperationOverride(),
            'createInstance' => $this->createInstance(),
            'createIntegrationAssociation' => $this->createIntegrationAssociation(),
            'createParticipant' => $this->createParticipant(),
            'createPersistentContactAssociation' => $this->createPersistentContactAssociation(),
            'createPredefinedAttribute' => $this->createPredefinedAttribute(),
            'createPrompt' => $this->createPrompt(),
            'createPushNotificationRegistration' => $this->createPushNotificationRegistration(),
            'createQueue' => $this->createQueue(),
            'createQuickConnect' => $this->createQuickConnect(),
            'createRoutingProfile' => $this->createRoutingProfile(),
            'createRule' => $this->createRule(),
            'createSecurityProfile' => $this->createSecurityProfile(),
            'createTaskTemplate' => $this->createTaskTemplate(),
            'createTrafficDistributionGroup' => $this->createTrafficDistributionGroup(),
            'createUseCase' => $this->createUseCase(),
            'createUser' => $this->createUser(),
            'createUserHierarchyGroup' => $this->createUserHierarchyGroup(),
            'createView' => $this->createView(),
            'createViewVersion' => $this->createViewVersion(),
            'createVocabulary' => $this->createVocabulary(),
            'deactivateEvaluationForm' => $this->deactivateEvaluationForm(),
            'deleteAttachedFile' => $this->deleteAttachedFile(),
            'deleteContactEvaluation' => $this->deleteContactEvaluation(),
            'deleteContactFlow' => $this->deleteContactFlow(),
            'deleteContactFlowModule' => $this->deleteContactFlowModule(),
            'deleteContactFlowVersion' => $this->deleteContactFlowVersion(),
            'deleteEmailAddress' => $this->deleteEmailAddress(),
            'deleteEvaluationForm' => $this->deleteEvaluationForm(),
            'deleteHoursOfOperation' => $this->deleteHoursOfOperation(),
            'deleteHoursOfOperationOverride' => $this->deleteHoursOfOperationOverride(),
            'deleteInstance' => $this->deleteInstance(),
            'deleteIntegrationAssociation' => $this->deleteIntegrationAssociation(),
            'deletePredefinedAttribute' => $this->deletePredefinedAttribute(),
            'deletePrompt' => $this->deletePrompt(),
            'deletePushNotificationRegistration' => $this->deletePushNotificationRegistration(),
            'deleteQueue' => $this->deleteQueue(),
            'deleteQuickConnect' => $this->deleteQuickConnect(),
            'deleteRoutingProfile' => $this->deleteRoutingProfile(),
            'deleteRule' => $this->deleteRule(),
            'deleteSecurityProfile' => $this->deleteSecurityProfile(),
            'deleteTaskTemplate' => $this->deleteTaskTemplate(),
            'deleteTrafficDistributionGroup' => $this->deleteTrafficDistributionGroup(),
            'deleteUseCase' => $this->deleteUseCase(),
            'deleteUser' => $this->deleteUser(),
            'deleteUserHierarchyGroup' => $this->deleteUserHierarchyGroup(),
            'deleteView' => $this->deleteView(),
            'deleteViewVersion' => $this->deleteViewVersion(),
            'deleteVocabulary' => $this->deleteVocabulary(),
            'describeAgentStatus' => $this->describeAgentStatus(),
            'describeAuthenticationProfile' => $this->describeAuthenticationProfile(),
            'describeContact' => $this->describeContact(),
            'describeContactEvaluation' => $this->describeContactEvaluation(),
            'describeContactFlow' => $this->describeContactFlow(),
            'describeContactFlowModule' => $this->describeContactFlowModule(),
            'describeEmailAddress' => $this->describeEmailAddress(),
            'describeEvaluationForm' => $this->describeEvaluationForm(),
            'describeHoursOfOperation' => $this->describeHoursOfOperation(),
            'describeHoursOfOperationOverride' => $this->describeHoursOfOperationOverride(),
            'describeInstance' => $this->describeInstance(),
            'describeInstanceAttribute' => $this->describeInstanceAttribute(),
            'describeInstanceStorageConfig' => $this->describeInstanceStorageConfig(),
            'describePhoneNumber' => $this->describePhoneNumber(),
            'describePredefinedAttribute' => $this->describePredefinedAttribute(),
            'describePrompt' => $this->describePrompt(),
            'describeQueue' => $this->describeQueue(),
            'describeQuickConnect' => $this->describeQuickConnect(),
            'describeRoutingProfile' => $this->describeRoutingProfile(),
            'describeRule' => $this->describeRule(),
            'describeSecurityProfile' => $this->describeSecurityProfile(),
            'describeTrafficDistributionGroup' => $this->describeTrafficDistributionGroup(),
            'describeUser' => $this->describeUser(),
            'describeUserHierarchyGroup' => $this->describeUserHierarchyGroup(),
            'describeUserHierarchyStructure' => $this->describeUserHierarchyStructure(),
            'describeView' => $this->describeView(),
            'describeVocabulary' => $this->describeVocabulary(),
            'disassociateAnalyticsDataSet' => $this->disassociateAnalyticsDataSet(),
            'disassociateApprovedOrigin' => $this->disassociateApprovedOrigin(),
            'disassociateBot' => $this->disassociateBot(),
            'disassociateFlow' => $this->disassociateFlow(),
            'disassociateInstanceStorageConfig' => $this->disassociateInstanceStorageConfig(),
            'disassociateLambdaFunction' => $this->disassociateLambdaFunction(),
            'disassociateLexBot' => $this->disassociateLexBot(),
            'disassociatePhoneNumberContactFlow' => $this->disassociatePhoneNumberContactFlow(),
            'disassociateQueueQuickConnects' => $this->disassociateQueueQuickConnects(),
            'disassociateRoutingProfileQueues' => $this->disassociateRoutingProfileQueues(),
            'disassociateSecurityKey' => $this->disassociateSecurityKey(),
            'disassociateTrafficDistributionGroupUser' => $this->disassociateTrafficDistributionGroupUser(),
            'disassociateUserProficiencies' => $this->disassociateUserProficiencies(),
            'dismissUserContact' => $this->dismissUserContact(),
            'getAttachedFile' => $this->getAttachedFile(),
            'getContactAttributes' => $this->getContactAttributes(),
            'getCurrentMetricData' => $this->getCurrentMetricData(),
            'getCurrentUserData' => $this->getCurrentUserData(),
            'getEffectiveHoursOfOperations' => $this->getEffectiveHoursOfOperations(),
            'getFederationToken' => $this->getFederationToken(),
            'getFlowAssociation' => $this->getFlowAssociation(),
            'getMetricData' => $this->getMetricData(),
            'getMetricDataV2' => $this->getMetricDataV2(),
            'getPromptFile' => $this->getPromptFile(),
            'getTaskTemplate' => $this->getTaskTemplate(),
            'getTrafficDistribution' => $this->getTrafficDistribution(),
            'importPhoneNumber' => $this->importPhoneNumber(),
            'listAgentStatuses' => $this->listAgentStatuses(),
            'listAnalyticsDataAssociations' => $this->listAnalyticsDataAssociations(),
            'listAnalyticsDataLakeDataSets' => $this->listAnalyticsDataLakeDataSets(),
            'listApprovedOrigins' => $this->listApprovedOrigins(),
            'listAssociatedContacts' => $this->listAssociatedContacts(),
            'listAuthenticationProfiles' => $this->listAuthenticationProfiles(),
            'listBots' => $this->listBots(),
            'listContactEvaluations' => $this->listContactEvaluations(),
            'listContactFlowModules' => $this->listContactFlowModules(),
            'listContactFlowVersions' => $this->listContactFlowVersions(),
            'listContactFlows' => $this->listContactFlows(),
            'listContactReferences' => $this->listContactReferences(),
            'listDefaultVocabularies' => $this->listDefaultVocabularies(),
            'listEvaluationFormVersions' => $this->listEvaluationFormVersions(),
            'listEvaluationForms' => $this->listEvaluationForms(),
            'listFlowAssociations' => $this->listFlowAssociations(),
            'listHoursOfOperationOverrides' => $this->listHoursOfOperationOverrides(),
            'listHoursOfOperations' => $this->listHoursOfOperations(),
            'listInstanceAttributes' => $this->listInstanceAttributes(),
            'listInstanceStorageConfigs' => $this->listInstanceStorageConfigs(),
            'listInstances' => $this->listInstances(),
            'listIntegrationAssociations' => $this->listIntegrationAssociations(),
            'listLambdaFunctions' => $this->listLambdaFunctions(),
            'listLexBots' => $this->listLexBots(),
            'listPhoneNumbers' => $this->listPhoneNumbers(),
            'listPhoneNumbersV2' => $this->listPhoneNumbersV2(),
            'listPredefinedAttributes' => $this->listPredefinedAttributes(),
            'listPrompts' => $this->listPrompts(),
            'listQueueQuickConnects' => $this->listQueueQuickConnects(),
            'listQueues' => $this->listQueues(),
            'listQuickConnects' => $this->listQuickConnects(),
            'listRealtimeContactAnalysisSegmentsV2' => $this->listRealtimeContactAnalysisSegmentsV2(),
            'listRoutingProfileQueues' => $this->listRoutingProfileQueues(),
            'listRoutingProfiles' => $this->listRoutingProfiles(),
            'listRules' => $this->listRules(),
            'listSecurityKeys' => $this->listSecurityKeys(),
            'listSecurityProfileApplications' => $this->listSecurityProfileApplications(),
            'listSecurityProfilePermissions' => $this->listSecurityProfilePermissions(),
            'listSecurityProfiles' => $this->listSecurityProfiles(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTaskTemplates' => $this->listTaskTemplates(),
            'listTrafficDistributionGroupUsers' => $this->listTrafficDistributionGroupUsers(),
            'listTrafficDistributionGroups' => $this->listTrafficDistributionGroups(),
            'listUseCases' => $this->listUseCases(),
            'listUserHierarchyGroups' => $this->listUserHierarchyGroups(),
            'listUserProficiencies' => $this->listUserProficiencies(),
            'listUsers' => $this->listUsers(),
            'listViewVersions' => $this->listViewVersions(),
            'listViews' => $this->listViews(),
            'monitorContact' => $this->monitorContact(),
            'pauseContact' => $this->pauseContact(),
            'putUserStatus' => $this->putUserStatus(),
            'releasePhoneNumber' => $this->releasePhoneNumber(),
            'replicateInstance' => $this->replicateInstance(),
            'resumeContact' => $this->resumeContact(),
            'resumeContactRecording' => $this->resumeContactRecording(),
            'searchAgentStatuses' => $this->searchAgentStatuses(),
            'searchAvailablePhoneNumbers' => $this->searchAvailablePhoneNumbers(),
            'searchContactFlowModules' => $this->searchContactFlowModules(),
            'searchContactFlows' => $this->searchContactFlows(),
            'searchContacts' => $this->searchContacts(),
            'searchEmailAddresses' => $this->searchEmailAddresses(),
            'searchHoursOfOperationOverrides' => $this->searchHoursOfOperationOverrides(),
            'searchHoursOfOperations' => $this->searchHoursOfOperations(),
            'searchPredefinedAttributes' => $this->searchPredefinedAttributes(),
            'searchPrompts' => $this->searchPrompts(),
            'searchQueues' => $this->searchQueues(),
            'searchQuickConnects' => $this->searchQuickConnects(),
            'searchResourceTags' => $this->searchResourceTags(),
            'searchRoutingProfiles' => $this->searchRoutingProfiles(),
            'searchSecurityProfiles' => $this->searchSecurityProfiles(),
            'searchUserHierarchyGroups' => $this->searchUserHierarchyGroups(),
            'searchUsers' => $this->searchUsers(),
            'searchVocabularies' => $this->searchVocabularies(),
            'sendChatIntegrationEvent' => $this->sendChatIntegrationEvent(),
            'sendOutboundEmail' => $this->sendOutboundEmail(),
            'startAttachedFileUpload' => $this->startAttachedFileUpload(),
            'startChatContact' => $this->startChatContact(),
            'startContactEvaluation' => $this->startContactEvaluation(),
            'startContactRecording' => $this->startContactRecording(),
            'startContactStreaming' => $this->startContactStreaming(),
            'startEmailContact' => $this->startEmailContact(),
            'startOutboundChatContact' => $this->startOutboundChatContact(),
            'startOutboundEmailContact' => $this->startOutboundEmailContact(),
            'startOutboundVoiceContact' => $this->startOutboundVoiceContact(),
            'startScreenSharing' => $this->startScreenSharing(),
            'startTaskContact' => $this->startTaskContact(),
            'startWebRTCContact' => $this->startWebRTCContact(),
            'stopContact' => $this->stopContact(),
            'stopContactRecording' => $this->stopContactRecording(),
            'stopContactStreaming' => $this->stopContactStreaming(),
            'submitContactEvaluation' => $this->submitContactEvaluation(),
            'suspendContactRecording' => $this->suspendContactRecording(),
            'tagContact' => $this->tagContact(),
            'tagResource' => $this->tagResource(),
            'transferContact' => $this->transferContact(),
            'untagContact' => $this->untagContact(),
            'untagResource' => $this->untagResource(),
            'updateAgentStatus' => $this->updateAgentStatus(),
            'updateAuthenticationProfile' => $this->updateAuthenticationProfile(),
            'updateContact' => $this->updateContact(),
            'updateContactAttributes' => $this->updateContactAttributes(),
            'updateContactEvaluation' => $this->updateContactEvaluation(),
            'updateContactFlowContent' => $this->updateContactFlowContent(),
            'updateContactFlowMetadata' => $this->updateContactFlowMetadata(),
            'updateContactFlowModuleContent' => $this->updateContactFlowModuleContent(),
            'updateContactFlowModuleMetadata' => $this->updateContactFlowModuleMetadata(),
            'updateContactFlowName' => $this->updateContactFlowName(),
            'updateContactRoutingData' => $this->updateContactRoutingData(),
            'updateContactSchedule' => $this->updateContactSchedule(),
            'updateEmailAddressMetadata' => $this->updateEmailAddressMetadata(),
            'updateEvaluationForm' => $this->updateEvaluationForm(),
            'updateHoursOfOperation' => $this->updateHoursOfOperation(),
            'updateHoursOfOperationOverride' => $this->updateHoursOfOperationOverride(),
            'updateInstanceAttribute' => $this->updateInstanceAttribute(),
            'updateInstanceStorageConfig' => $this->updateInstanceStorageConfig(),
            'updateParticipantAuthentication' => $this->updateParticipantAuthentication(),
            'updateParticipantRoleConfig' => $this->updateParticipantRoleConfig(),
            'updatePhoneNumber' => $this->updatePhoneNumber(),
            'updatePhoneNumberMetadata' => $this->updatePhoneNumberMetadata(),
            'updatePredefinedAttribute' => $this->updatePredefinedAttribute(),
            'updatePrompt' => $this->updatePrompt(),
            'updateQueueHoursOfOperation' => $this->updateQueueHoursOfOperation(),
            'updateQueueMaxContacts' => $this->updateQueueMaxContacts(),
            'updateQueueName' => $this->updateQueueName(),
            'updateQueueOutboundCallerConfig' => $this->updateQueueOutboundCallerConfig(),
            'updateQueueOutboundEmailConfig' => $this->updateQueueOutboundEmailConfig(),
            'updateQueueStatus' => $this->updateQueueStatus(),
            'updateQuickConnectConfig' => $this->updateQuickConnectConfig(),
            'updateQuickConnectName' => $this->updateQuickConnectName(),
            'updateRoutingProfileAgentAvailabilityTimer' => $this->updateRoutingProfileAgentAvailabilityTimer(),
            'updateRoutingProfileConcurrency' => $this->updateRoutingProfileConcurrency(),
            'updateRoutingProfileDefaultOutboundQueue' => $this->updateRoutingProfileDefaultOutboundQueue(),
            'updateRoutingProfileName' => $this->updateRoutingProfileName(),
            'updateRoutingProfileQueues' => $this->updateRoutingProfileQueues(),
            'updateRule' => $this->updateRule(),
            'updateSecurityProfile' => $this->updateSecurityProfile(),
            'updateTaskTemplate' => $this->updateTaskTemplate(),
            'updateTrafficDistribution' => $this->updateTrafficDistribution(),
            'updateUserHierarchy' => $this->updateUserHierarchy(),
            'updateUserHierarchyGroupName' => $this->updateUserHierarchyGroupName(),
            'updateUserHierarchyStructure' => $this->updateUserHierarchyStructure(),
            'updateUserIdentityInfo' => $this->updateUserIdentityInfo(),
            'updateUserPhoneConfig' => $this->updateUserPhoneConfig(),
            'updateUserProficiencies' => $this->updateUserProficiencies(),
            'updateUserRoutingProfile' => $this->updateUserRoutingProfile(),
            'updateUserSecurityProfiles' => $this->updateUserSecurityProfiles(),
            'updateViewContent' => $this->updateViewContent(),
            'updateViewMetadata' => $this->updateViewMetadata(),
        };
    }
    private function activateEvaluationForm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormId'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function associateAnalyticsDataSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceShareId'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceShareArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateApprovedOrigin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function associateBot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function associateDefaultVocabulary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateInstanceStorageConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateLambdaFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function associateLexBot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function associatePhoneNumberContactFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function associateQueueQuickConnects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function associateRoutingProfileQueues(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function associateSecurityKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateTrafficDistributionGroupUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateUserProficiencies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function batchAssociateAnalyticsDataSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Created'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceShareId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceShareArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceShareStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchDisassociateAnalyticsDataSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetAttachedFileMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Files'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileUseCaseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectUserArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWSIdentityArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_MESSAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetFlowAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowAssociationSummaryList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WHATSAPP_MESSAGING_PHONE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_PHONE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('INBOUND_EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUTBOUND_EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYTICS_CONNECTOR'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchPutContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SuccessfulRequestList'),
                new \PHPStan\Type\Constant\ConstantStringType('FailedRequestList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RequestIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RequestIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureReasonCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureReasonMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_ATTRIBUTE_KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_CUSTOMER_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SYSTEM_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_QUEUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISSING_CAMPAIGN'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISSING_CUSTOMER_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISSING_QUEUE_ID_AND_SYSTEM_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUEST_THROTTLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IDEMPOTENCY_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function claimPhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberId'),
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function completeAttachedFileUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createAgentStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AgentStatusARN'),
                new \PHPStan\Type\Constant\ConstantStringType('AgentStatusId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactId'),
                new \PHPStan\Type\Constant\ConstantStringType('ContactArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createContactFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactFlowId'),
                new \PHPStan\Type\Constant\ConstantStringType('ContactFlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FlowContentSha256'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createContactFlowModule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createContactFlowVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactFlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function createEmailAddress(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EmailAddressId'),
                new \PHPStan\Type\Constant\ConstantStringType('EmailAddressArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createEvaluationForm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormId'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createHoursOfOperation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationId'),
                new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createHoursOfOperationOverride(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationOverrideId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createIntegrationAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationAssociationId'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationAssociationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createParticipant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ParticipantCredentials'),
                new \PHPStan\Type\Constant\ConstantStringType('ParticipantId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ParticipantToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expiry'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPersistentContactAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContinuedFromContactId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPredefinedAttribute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createPrompt(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PromptARN'),
                new \PHPStan\Type\Constant\ConstantStringType('PromptId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPushNotificationRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createQueue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueueArn'),
                new \PHPStan\Type\Constant\ConstantStringType('QueueId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createQuickConnect(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QuickConnectARN'),
                new \PHPStan\Type\Constant\ConstantStringType('QuickConnectId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRoutingProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RoutingProfileArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RoutingProfileId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSecurityProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SecurityProfileId'),
                new \PHPStan\Type\Constant\ConstantStringType('SecurityProfileArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTaskTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTrafficDistributionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createUseCase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UseCaseId'),
                new \PHPStan\Type\Constant\ConstantStringType('UseCaseArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                new \PHPStan\Type\Constant\ConstantStringType('UserArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createUserHierarchyGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HierarchyGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('HierarchyGroupArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('View'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ViewContentSha256'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InputSchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('Template'),
                        new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createViewVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('View'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ViewContentSha256'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InputSchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('Template'),
                        new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createVocabulary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VocabularyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('VocabularyId'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATION_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                ]),
            ]),
        ]);
    }
    private function deactivateEvaluationForm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormId'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function deleteAttachedFile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteContactEvaluation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteContactFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteContactFlowModule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteContactFlowVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEmailAddress(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEvaluationForm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteHoursOfOperation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteHoursOfOperationOverride(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteIntegrationAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deletePredefinedAttribute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deletePrompt(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deletePushNotificationRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteQueue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteQuickConnect(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRoutingProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteSecurityProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteTaskTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTrafficDistributionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteUseCase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteUserHierarchyGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteViewVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteVocabulary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VocabularyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('VocabularyId'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATION_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                ]),
            ]),
        ]);
    }
    private function describeAgentStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AgentStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AgentStatusARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('AgentStatusId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayOrder'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFFLINE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeAuthenticationProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedIps'),
                    new \PHPStan\Type\Constant\ConstantStringType('BlockedIps'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('PeriodicSessionDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSessionDuration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function describeContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Contact'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitialContactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreviousContactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactAssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitiationMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Channel'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueueInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AgentInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitiationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisconnectTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastPausedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastResumedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalPauseCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalPauseDurationInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduledTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('RelatedContactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('WisdomInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SystemEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueueTimeAdjustmentSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueuePriority'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectedToSystemTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoutingCriteria'),
                    new \PHPStan\Type\Constant\ConstantStringType('Customer'),
                    new \PHPStan\Type\Constant\ConstantStringType('Campaign'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnsweringMachineDetectionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerVoiceActivity'),
                    new \PHPStan\Type\Constant\ConstantStringType('QualityMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisconnectDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalEmailRecipients'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentAttributes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INBOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUTBOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSFER'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUE_TRANSFER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CALLBACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('API'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MONITOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_OUTBOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEBRTC_API'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_REPLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLOW'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnqueueTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectedToAgentTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('AgentPauseDurationInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('HierarchyGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Level1'),
                            new \PHPStan\Type\Constant\ConstantStringType('Level2'),
                            new \PHPStan\Type\Constant\ConstantStringType('Level3'),
                            new \PHPStan\Type\Constant\ConstantStringType('Level4'),
                            new \PHPStan\Type\Constant\ConstantStringType('Level5'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlatformName'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperatingSystem'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Video'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScreenShare'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('SEND'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEND'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SessionArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TELEPHONE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('VOIP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTACT_FLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT_PHONENUMBER_ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ADDRESS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TELEPHONE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('VOIP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTACT_FLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT_PHONENUMBER_ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ADDRESS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Steps'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActivationTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Index'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Expiry'),
                            new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpiryTimestamp'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeCondition'),
                                new \PHPStan\Type\Constant\ConstantStringType('AndExpression'),
                                new \PHPStan\Type\Constant\ConstantStringType('OrExpression'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotAttributeCondition'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProficiencyLevel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Range'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MatchCriteria'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MinProficiencyLevel'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxProficiencyLevel'),
                                    ], [
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AgentsCriteria'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('AgentIds'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProficiencyLevel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Range'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MatchCriteria'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MinProficiencyLevel'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxProficiencyLevel'),
                                    ], [
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AgentsCriteria'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('AgentIds'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('JOINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlatformName'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperatingSystem'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Video'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScreenShare'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('SEND'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEND'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CampaignId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNDETECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('HUMAN_ANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIT_TONE_DETECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIT_TONE_BUSY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIT_TONE_INVALID_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAX_MACHINE_DETECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICEMAIL_BEEP'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICEMAIL_NO_BEEP'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMD_UNRESOLVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMD_UNANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMD_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMD_NOT_APPLICABLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GreetingStartTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('GreetingEndTimestamp'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Agent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Customer'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QualityScore'),
                                new \PHPStan\Type\Constant\ConstantStringType('PotentialQualityIssues'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QualityScore'),
                                new \PHPStan\Type\Constant\ConstantStringType('PotentialQualityIssues'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PotentialDisconnectIssue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ToList'),
                        new \PHPStan\Type\Constant\ConstantStringType('CcList'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ValueString'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValueMap'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValueInteger'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeContactEvaluation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Evaluation'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationForm'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('Answers'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scores'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ContactId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluatorArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContactAgentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Percentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                            new \PHPStan\Type\Constant\ConstantStringType('AutomaticFail'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('SystemSuggestedValue'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('NumericValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('NumericValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Percentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFail'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScoringStrategy'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Section'),
                        new \PHPStan\Type\Constant\ConstantStringType('Question'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Title'),
                            new \PHPStan\Type\Constant\ConstantStringType('RefId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Instructions'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\MixedType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Title'),
                            new \PHPStan\Type\Constant\ConstantStringType('Instructions'),
                            new \PHPStan\Type\Constant\ConstantStringType('RefId'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotApplicableEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('QuestionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('QuestionTypeProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SINGLESELECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('NUMERIC'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Numeric'),
                                new \PHPStan\Type\Constant\ConstantStringType('SingleSelect'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MinValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Automation'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MinValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFail'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PropertyValue'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('OVERALL_CUSTOMER_SENTIMENT_SCORE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('OVERALL_AGENT_SENTIMENT_SCORE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NON_TALK_TIME'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NON_TALK_TIME_PERCENTAGE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NUMBER_OF_INTERRUPTIONS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CONTACT_DURATION'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AGENT_INTERACTION_DURATION'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_HOLD_TIME'),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DisplayAs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Automation'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RefId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFail'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ])),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DROPDOWN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RADIO'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DefaultOptionRefId'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('RuleCategory'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Category'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                                                new \PHPStan\Type\Constant\ConstantStringType('OptionRefId'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('PRESENT'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_PRESENT'),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('QUESTION_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECTION_ONLY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeContactFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactFlow'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowContentSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONTACT_FLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_QUEUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_HOLD'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_WHISPER'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_HOLD'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_WHISPER'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUTBOUND_WHISPER'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_TRANSFER'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUE_TRANSFER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAMPAIGN'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeContactFlowModule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactFlowModule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function describeEmailAddress(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EmailAddressId'),
                new \PHPStan\Type\Constant\ConstantStringType('EmailAddressArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeEvaluationForm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationForm'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Locked'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScoringStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Section'),
                        new \PHPStan\Type\Constant\ConstantStringType('Question'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Title'),
                            new \PHPStan\Type\Constant\ConstantStringType('RefId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Instructions'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\MixedType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Title'),
                            new \PHPStan\Type\Constant\ConstantStringType('Instructions'),
                            new \PHPStan\Type\Constant\ConstantStringType('RefId'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotApplicableEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('QuestionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('QuestionTypeProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SINGLESELECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('NUMERIC'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Numeric'),
                                new \PHPStan\Type\Constant\ConstantStringType('SingleSelect'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MinValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Automation'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MinValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFail'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PropertyValue'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('OVERALL_CUSTOMER_SENTIMENT_SCORE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('OVERALL_AGENT_SENTIMENT_SCORE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NON_TALK_TIME'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NON_TALK_TIME_PERCENTAGE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NUMBER_OF_INTERRUPTIONS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CONTACT_DURATION'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AGENT_INTERACTION_DURATION'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_HOLD_TIME'),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DisplayAs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Automation'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RefId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFail'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ])),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DROPDOWN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RADIO'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DefaultOptionRefId'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('RuleCategory'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Category'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                                                new \PHPStan\Type\Constant\ConstantStringType('OptionRefId'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('PRESENT'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_PRESENT'),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('QUESTION_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECTION_ONLY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function describeHoursOfOperation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('Config'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Day'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeHoursOfOperationOverride(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationOverride'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationOverrideId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Config'),
                    new \PHPStan\Type\Constant\ConstantStringType('EffectiveFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('EffectiveTill'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Day'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Instance'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityManagementType'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('InboundCallsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutboundCallsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceAccessUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECT_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXISTING_DIRECTORY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationStatusSummaryList'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalSignInEndpoint'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationStatusReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_REPLICATION_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_REPLICATION_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_REPLICATION_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_REPLICA_DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_REPLICATION_DELETION_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_REPLICATION_NOT_STARTED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeInstanceAttribute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INBOUND_CALLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUTBOUND_CALLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTACTFLOW_LOGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTACT_LENS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO_RESOLVE_BEST_VOICES'),
                        new \PHPStan\Type\Constant\ConstantStringType('USE_CUSTOM_TTS_VOICES'),
                        new \PHPStan\Type\Constant\ConstantStringType('EARLY_MEDIA'),
                        new \PHPStan\Type\Constant\ConstantStringType('MULTI_PARTY_CONFERENCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH_VOLUME_OUTBOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENHANCED_CONTACT_MONITORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENHANCED_CHAT_MONITORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MULTI_PARTY_CHAT_CONFERENCE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeInstanceStorageConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StorageConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisVideoStreamConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisStreamConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('KINESIS_VIDEO_STREAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('KINESIS_STREAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('KINESIS_FIREHOSE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('BucketPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodHours'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StreamArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FirehoseArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describePhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClaimedPhoneNumberSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberCountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourcePhoneNumberArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AF'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL'),
                        new \PHPStan\Type\Constant\ConstantStringType('DZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('AS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AD'),
                        new \PHPStan\Type\Constant\ConstantStringType('AO'),
                        new \PHPStan\Type\Constant\ConstantStringType('AI'),
                        new \PHPStan\Type\Constant\ConstantStringType('AQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('AG'),
                        new \PHPStan\Type\Constant\ConstantStringType('AR'),
                        new \PHPStan\Type\Constant\ConstantStringType('AM'),
                        new \PHPStan\Type\Constant\ConstantStringType('AW'),
                        new \PHPStan\Type\Constant\ConstantStringType('AU'),
                        new \PHPStan\Type\Constant\ConstantStringType('AT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('BS'),
                        new \PHPStan\Type\Constant\ConstantStringType('BH'),
                        new \PHPStan\Type\Constant\ConstantStringType('BD'),
                        new \PHPStan\Type\Constant\ConstantStringType('BB'),
                        new \PHPStan\Type\Constant\ConstantStringType('BY'),
                        new \PHPStan\Type\Constant\ConstantStringType('BE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('BJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('BM'),
                        new \PHPStan\Type\Constant\ConstantStringType('BT'),
                        new \PHPStan\Type\Constant\ConstantStringType('BO'),
                        new \PHPStan\Type\Constant\ConstantStringType('BA'),
                        new \PHPStan\Type\Constant\ConstantStringType('BW'),
                        new \PHPStan\Type\Constant\ConstantStringType('BR'),
                        new \PHPStan\Type\Constant\ConstantStringType('IO'),
                        new \PHPStan\Type\Constant\ConstantStringType('VG'),
                        new \PHPStan\Type\Constant\ConstantStringType('BN'),
                        new \PHPStan\Type\Constant\ConstantStringType('BG'),
                        new \PHPStan\Type\Constant\ConstantStringType('BF'),
                        new \PHPStan\Type\Constant\ConstantStringType('BI'),
                        new \PHPStan\Type\Constant\ConstantStringType('KH'),
                        new \PHPStan\Type\Constant\ConstantStringType('CM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CA'),
                        new \PHPStan\Type\Constant\ConstantStringType('CV'),
                        new \PHPStan\Type\Constant\ConstantStringType('KY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CF'),
                        new \PHPStan\Type\Constant\ConstantStringType('TD'),
                        new \PHPStan\Type\Constant\ConstantStringType('CL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CX'),
                        new \PHPStan\Type\Constant\ConstantStringType('CC'),
                        new \PHPStan\Type\Constant\ConstantStringType('CO'),
                        new \PHPStan\Type\Constant\ConstantStringType('KM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CK'),
                        new \PHPStan\Type\Constant\ConstantStringType('CR'),
                        new \PHPStan\Type\Constant\ConstantStringType('HR'),
                        new \PHPStan\Type\Constant\ConstantStringType('CU'),
                        new \PHPStan\Type\Constant\ConstantStringType('CW'),
                        new \PHPStan\Type\Constant\ConstantStringType('CY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('CD'),
                        new \PHPStan\Type\Constant\ConstantStringType('DK'),
                        new \PHPStan\Type\Constant\ConstantStringType('DJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('DM'),
                        new \PHPStan\Type\Constant\ConstantStringType('DO'),
                        new \PHPStan\Type\Constant\ConstantStringType('TL'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC'),
                        new \PHPStan\Type\Constant\ConstantStringType('EG'),
                        new \PHPStan\Type\Constant\ConstantStringType('SV'),
                        new \PHPStan\Type\Constant\ConstantStringType('GQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('ER'),
                        new \PHPStan\Type\Constant\ConstantStringType('EE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ET'),
                        new \PHPStan\Type\Constant\ConstantStringType('FK'),
                        new \PHPStan\Type\Constant\ConstantStringType('FO'),
                        new \PHPStan\Type\Constant\ConstantStringType('FJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('FI'),
                        new \PHPStan\Type\Constant\ConstantStringType('FR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PF'),
                        new \PHPStan\Type\Constant\ConstantStringType('GA'),
                        new \PHPStan\Type\Constant\ConstantStringType('GM'),
                        new \PHPStan\Type\Constant\ConstantStringType('GE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GH'),
                        new \PHPStan\Type\Constant\ConstantStringType('GI'),
                        new \PHPStan\Type\Constant\ConstantStringType('GR'),
                        new \PHPStan\Type\Constant\ConstantStringType('GL'),
                        new \PHPStan\Type\Constant\ConstantStringType('GD'),
                        new \PHPStan\Type\Constant\ConstantStringType('GU'),
                        new \PHPStan\Type\Constant\ConstantStringType('GT'),
                        new \PHPStan\Type\Constant\ConstantStringType('GG'),
                        new \PHPStan\Type\Constant\ConstantStringType('GN'),
                        new \PHPStan\Type\Constant\ConstantStringType('GW'),
                        new \PHPStan\Type\Constant\ConstantStringType('GY'),
                        new \PHPStan\Type\Constant\ConstantStringType('HT'),
                        new \PHPStan\Type\Constant\ConstantStringType('HN'),
                        new \PHPStan\Type\Constant\ConstantStringType('HK'),
                        new \PHPStan\Type\Constant\ConstantStringType('HU'),
                        new \PHPStan\Type\Constant\ConstantStringType('IS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('IR'),
                        new \PHPStan\Type\Constant\ConstantStringType('IQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('IE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IM'),
                        new \PHPStan\Type\Constant\ConstantStringType('IL'),
                        new \PHPStan\Type\Constant\ConstantStringType('IT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CI'),
                        new \PHPStan\Type\Constant\ConstantStringType('JM'),
                        new \PHPStan\Type\Constant\ConstantStringType('JP'),
                        new \PHPStan\Type\Constant\ConstantStringType('JE'),
                        new \PHPStan\Type\Constant\ConstantStringType('JO'),
                        new \PHPStan\Type\Constant\ConstantStringType('KZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('KE'),
                        new \PHPStan\Type\Constant\ConstantStringType('KI'),
                        new \PHPStan\Type\Constant\ConstantStringType('KW'),
                        new \PHPStan\Type\Constant\ConstantStringType('KG'),
                        new \PHPStan\Type\Constant\ConstantStringType('LA'),
                        new \PHPStan\Type\Constant\ConstantStringType('LV'),
                        new \PHPStan\Type\Constant\ConstantStringType('LB'),
                        new \PHPStan\Type\Constant\ConstantStringType('LS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LR'),
                        new \PHPStan\Type\Constant\ConstantStringType('LY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LI'),
                        new \PHPStan\Type\Constant\ConstantStringType('LT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LU'),
                        new \PHPStan\Type\Constant\ConstantStringType('MO'),
                        new \PHPStan\Type\Constant\ConstantStringType('MK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MG'),
                        new \PHPStan\Type\Constant\ConstantStringType('MW'),
                        new \PHPStan\Type\Constant\ConstantStringType('MY'),
                        new \PHPStan\Type\Constant\ConstantStringType('MV'),
                        new \PHPStan\Type\Constant\ConstantStringType('ML'),
                        new \PHPStan\Type\Constant\ConstantStringType('MT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MR'),
                        new \PHPStan\Type\Constant\ConstantStringType('MU'),
                        new \PHPStan\Type\Constant\ConstantStringType('YT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MX'),
                        new \PHPStan\Type\Constant\ConstantStringType('FM'),
                        new \PHPStan\Type\Constant\ConstantStringType('MD'),
                        new \PHPStan\Type\Constant\ConstantStringType('MC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ME'),
                        new \PHPStan\Type\Constant\ConstantStringType('MS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MA'),
                        new \PHPStan\Type\Constant\ConstantStringType('MZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('MM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NA'),
                        new \PHPStan\Type\Constant\ConstantStringType('NR'),
                        new \PHPStan\Type\Constant\ConstantStringType('NP'),
                        new \PHPStan\Type\Constant\ConstantStringType('NL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AN'),
                        new \PHPStan\Type\Constant\ConstantStringType('NC'),
                        new \PHPStan\Type\Constant\ConstantStringType('NZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('NI'),
                        new \PHPStan\Type\Constant\ConstantStringType('NE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NG'),
                        new \PHPStan\Type\Constant\ConstantStringType('NU'),
                        new \PHPStan\Type\Constant\ConstantStringType('KP'),
                        new \PHPStan\Type\Constant\ConstantStringType('MP'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO'),
                        new \PHPStan\Type\Constant\ConstantStringType('OM'),
                        new \PHPStan\Type\Constant\ConstantStringType('PK'),
                        new \PHPStan\Type\Constant\ConstantStringType('PW'),
                        new \PHPStan\Type\Constant\ConstantStringType('PA'),
                        new \PHPStan\Type\Constant\ConstantStringType('PG'),
                        new \PHPStan\Type\Constant\ConstantStringType('PY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PH'),
                        new \PHPStan\Type\Constant\ConstantStringType('PN'),
                        new \PHPStan\Type\Constant\ConstantStringType('PL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PR'),
                        new \PHPStan\Type\Constant\ConstantStringType('QA'),
                        new \PHPStan\Type\Constant\ConstantStringType('CG'),
                        new \PHPStan\Type\Constant\ConstantStringType('RE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RO'),
                        new \PHPStan\Type\Constant\ConstantStringType('RU'),
                        new \PHPStan\Type\Constant\ConstantStringType('RW'),
                        new \PHPStan\Type\Constant\ConstantStringType('BL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SH'),
                        new \PHPStan\Type\Constant\ConstantStringType('KN'),
                        new \PHPStan\Type\Constant\ConstantStringType('LC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MF'),
                        new \PHPStan\Type\Constant\ConstantStringType('PM'),
                        new \PHPStan\Type\Constant\ConstantStringType('VC'),
                        new \PHPStan\Type\Constant\ConstantStringType('WS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SM'),
                        new \PHPStan\Type\Constant\ConstantStringType('ST'),
                        new \PHPStan\Type\Constant\ConstantStringType('SA'),
                        new \PHPStan\Type\Constant\ConstantStringType('SN'),
                        new \PHPStan\Type\Constant\ConstantStringType('RS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SC'),
                        new \PHPStan\Type\Constant\ConstantStringType('SL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SG'),
                        new \PHPStan\Type\Constant\ConstantStringType('SX'),
                        new \PHPStan\Type\Constant\ConstantStringType('SK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SI'),
                        new \PHPStan\Type\Constant\ConstantStringType('SB'),
                        new \PHPStan\Type\Constant\ConstantStringType('SO'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZA'),
                        new \PHPStan\Type\Constant\ConstantStringType('KR'),
                        new \PHPStan\Type\Constant\ConstantStringType('ES'),
                        new \PHPStan\Type\Constant\ConstantStringType('LK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SD'),
                        new \PHPStan\Type\Constant\ConstantStringType('SR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('SZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('SE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CH'),
                        new \PHPStan\Type\Constant\ConstantStringType('SY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TW'),
                        new \PHPStan\Type\Constant\ConstantStringType('TJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('TZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('TH'),
                        new \PHPStan\Type\Constant\ConstantStringType('TG'),
                        new \PHPStan\Type\Constant\ConstantStringType('TK'),
                        new \PHPStan\Type\Constant\ConstantStringType('TO'),
                        new \PHPStan\Type\Constant\ConstantStringType('TT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TN'),
                        new \PHPStan\Type\Constant\ConstantStringType('TR'),
                        new \PHPStan\Type\Constant\ConstantStringType('TM'),
                        new \PHPStan\Type\Constant\ConstantStringType('TC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TV'),
                        new \PHPStan\Type\Constant\ConstantStringType('VI'),
                        new \PHPStan\Type\Constant\ConstantStringType('UG'),
                        new \PHPStan\Type\Constant\ConstantStringType('UA'),
                        new \PHPStan\Type\Constant\ConstantStringType('AE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('US'),
                        new \PHPStan\Type\Constant\ConstantStringType('UY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('VU'),
                        new \PHPStan\Type\Constant\ConstantStringType('VA'),
                        new \PHPStan\Type\Constant\ConstantStringType('VE'),
                        new \PHPStan\Type\Constant\ConstantStringType('VN'),
                        new \PHPStan\Type\Constant\ConstantStringType('WF'),
                        new \PHPStan\Type\Constant\ConstantStringType('EH'),
                        new \PHPStan\Type\Constant\ConstantStringType('YE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZM'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZW'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TOLL_FREE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DID'),
                        new \PHPStan\Type\Constant\ConstantStringType('UIFN'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('THIRD_PARTY_TF'),
                        new \PHPStan\Type\Constant\ConstantStringType('THIRD_PARTY_DID'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHORT_CODE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLAIMED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describePredefinedAttribute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PredefinedAttribute'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StringList'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describePrompt(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Prompt'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PromptARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('PromptId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeQueue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Queue'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueueArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueueId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutboundCallerConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutboundEmailConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxContacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundCallerIdName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundCallerIdNumberId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundFlowId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundEmailAddressId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeQuickConnect(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QuickConnect'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QuickConnectARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuickConnectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuickConnectConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('QuickConnectType'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueueConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUEUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE_NUMBER'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContactFlowId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('QueueId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContactFlowId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeRoutingProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RoutingProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoutingProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoutingProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaConcurrencies'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultOutboundQueueId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssociatedQueues'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssociatedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('AgentAvailabilityTimer'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedQueueIds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Channel'),
                        new \PHPStan\Type\Constant\ConstantStringType('Concurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrossChannelBehavior'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BehaviorType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ROUTE_CURRENT_CHANNEL_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROUTE_ANY_CHANNEL'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TIME_SINCE_LAST_ACTIVITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIME_SINCE_LAST_INBOUND'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function describeRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggerEventSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('Function'),
                    new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublishStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EventSourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('IntegrationAssociationId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OnPostCallAnalysisAvailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnRealTimeCallAnalysisAvailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnRealTimeChatAnalysisAvailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnPostChatAnalysisAvailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnZendeskTicketCreate'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnZendeskTicketStatusUpdate'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnSalesforceCaseCreate'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnContactEvaluationSubmit'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnMetricDataUpdate'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnCaseCreate'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnCaseUpdate'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventBridgeAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssignContactCategoryAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('SendNotificationAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateCaseAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateCaseAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndAssociatedTasksAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubmitAutoEvaluationAction'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_TASK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSIGN_CONTACT_CATEGORY'),
                            new \PHPStan\Type\Constant\ConstantStringType('GENERATE_EVENTBRIDGE_EVENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEND_NOTIFICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_CASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_CASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('END_ASSOCIATED_TASKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBMIT_AUTO_EVALUATION'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContactFlowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('References'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONTACT_ANALYSIS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL_MESSAGE'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeliveryMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                            new \PHPStan\Type\Constant\ConstantStringType('Content'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Recipient'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('UserTags'),
                                new \PHPStan\Type\Constant\ConstantStringType('UserIds'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Fields'),
                            new \PHPStan\Type\Constant\ConstantStringType('TemplateId'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DoubleValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EmptyValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Fields'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DoubleValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EmptyValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function describeSecurityProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SecurityProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedAccessControlTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagRestrictedResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('HierarchyRestrictedResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedAccessControlHierarchyGroupId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeTrafficDistributionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrafficDistributionGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function describeUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('User'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryUserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityProfileIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoutingProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HierarchyGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FirstName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Email'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecondaryEmail'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mobile'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoAccept'),
                        new \PHPStan\Type\Constant\ConstantStringType('AfterContactWorkTimeLimit'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeskPhoneNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOFT_PHONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DESK_PHONE'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeUserHierarchyGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HierarchyGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('LevelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HierarchyPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LevelOne'),
                        new \PHPStan\Type\Constant\ConstantStringType('LevelTwo'),
                        new \PHPStan\Type\Constant\ConstantStringType('LevelThree'),
                        new \PHPStan\Type\Constant\ConstantStringType('LevelFour'),
                        new \PHPStan\Type\Constant\ConstantStringType('LevelFive'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeUserHierarchyStructure(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HierarchyStructure'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LevelOne'),
                    new \PHPStan\Type\Constant\ConstantStringType('LevelTwo'),
                    new \PHPStan\Type\Constant\ConstantStringType('LevelThree'),
                    new \PHPStan\Type\Constant\ConstantStringType('LevelFour'),
                    new \PHPStan\Type\Constant\ConstantStringType('LevelFive'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('View'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ViewContentSha256'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InputSchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('Template'),
                        new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeVocabulary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Vocabulary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ar-AE'),
                        new \PHPStan\Type\Constant\ConstantStringType('de-CH'),
                        new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-AB'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-IE'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-IN'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-WL'),
                        new \PHPStan\Type\Constant\ConstantStringType('es-ES'),
                        new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi-IN'),
                        new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja-JP'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko-KR'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt-BR'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt-PT'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-CN'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-NZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-ZA'),
                        new \PHPStan\Type\Constant\ConstantStringType('ca-ES'),
                        new \PHPStan\Type\Constant\ConstantStringType('da-DK'),
                        new \PHPStan\Type\Constant\ConstantStringType('fi-FI'),
                        new \PHPStan\Type\Constant\ConstantStringType('id-ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('ms-MY'),
                        new \PHPStan\Type\Constant\ConstantStringType('nl-NL'),
                        new \PHPStan\Type\Constant\ConstantStringType('no-NO'),
                        new \PHPStan\Type\Constant\ConstantStringType('pl-PL'),
                        new \PHPStan\Type\Constant\ConstantStringType('sv-SE'),
                        new \PHPStan\Type\Constant\ConstantStringType('tl-PH'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function disassociateAnalyticsDataSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateApprovedOrigin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateBot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateInstanceStorageConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateLambdaFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateLexBot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociatePhoneNumberContactFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateQueueQuickConnects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateRoutingProfileQueues(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateSecurityKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateTrafficDistributionGroupUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateUserProficiencies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function dismissUserContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAttachedFile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FileId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('FileStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('FileName'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSizeInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FileUseCaseType'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('DownloadUrlMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL_MESSAGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectUserArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWSIdentityArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    new \PHPStan\Type\Constant\ConstantStringType('UrlExpiry'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getContactAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getCurrentMetricData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricResults'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSnapshotTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateTotalCount'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Collections'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Queue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Channel'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoutingProfile'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoutingStepExpression'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AGENTS_ONLINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AGENTS_AVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AGENTS_ON_CALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('AGENTS_NON_PRODUCTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AGENTS_AFTER_CONTACT_WORK'),
                                new \PHPStan\Type\Constant\ConstantStringType('AGENTS_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('AGENTS_STAFFED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACTS_IN_QUEUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('OLDEST_CONTACT_AGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACTS_SCHEDULED'),
                                new \PHPStan\Type\Constant\ConstantStringType('AGENTS_ON_CONTACT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SLOTS_ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SLOTS_AVAILABLE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SECONDS'),
                                new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PERCENT'),
                            ]),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ])),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getCurrentUserData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('UserDataList'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateTotalCount'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('User'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoutingProfile'),
                    new \PHPStan\Type\Constant\ConstantStringType('HierarchyPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailableSlotsByChannel'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSlotsByChannel'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveSlotsByChannel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Contacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextStatus'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LevelOne'),
                        new \PHPStan\Type\Constant\ConstantStringType('LevelTwo'),
                        new \PHPStan\Type\Constant\ConstantStringType('LevelThree'),
                        new \PHPStan\Type\Constant\ConstantStringType('LevelFour'),
                        new \PHPStan\Type\Constant\ConstantStringType('LevelFive'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StatusStartTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusName'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ContactId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Channel'),
                        new \PHPStan\Type\Constant\ConstantStringType('InitiationMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('AgentContactState'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateStartTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectedToAgentTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Queue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INBOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('OUTBOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSFER'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUEUE_TRANSFER'),
                            new \PHPStan\Type\Constant\ConstantStringType('CALLBACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('API'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISCONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONITOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_OUTBOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEBRTC_API'),
                            new \PHPStan\Type\Constant\ConstantStringType('AGENT_REPLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLOW'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INCOMING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTED_ONHOLD'),
                            new \PHPStan\Type\Constant\ConstantStringType('MISSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getEffectiveHoursOfOperations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EffectiveHoursOfOperationList'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Date'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationalHours'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Start'),
                        new \PHPStan\Type\Constant\ConstantStringType('End'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getFederationToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                new \PHPStan\Type\Constant\ConstantStringType('SignInUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('UserArn'),
                new \PHPStan\Type\Constant\ConstantStringType('UserId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessTokenExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('RefreshToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('RefreshTokenExpiration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getFlowAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('FlowId'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SMS_PHONE_NUMBER'),
                    new \PHPStan\Type\Constant\ConstantStringType('INBOUND_EMAIL'),
                    new \PHPStan\Type\Constant\ConstantStringType('OUTBOUND_EMAIL'),
                    new \PHPStan\Type\Constant\ConstantStringType('ANALYTICS_CONNECTOR'),
                    new \PHPStan\Type\Constant\ConstantStringType('WHATSAPP_MESSAGING_PHONE_NUMBER'),
                ]),
            ]),
        ]);
    }
    private function getMetricData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricResults'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Collections'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Queue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Channel'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoutingProfile'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoutingStepExpression'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACTS_QUEUED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACTS_HANDLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACTS_ABANDONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACTS_CONSULTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACTS_AGENT_HUNG_UP_FIRST'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACTS_HANDLED_INCOMING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACTS_HANDLED_OUTBOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACTS_HOLD_ABANDONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACTS_TRANSFERRED_IN'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACTS_TRANSFERRED_OUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACTS_TRANSFERRED_IN_FROM_QUEUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACTS_TRANSFERRED_OUT_FROM_QUEUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACTS_MISSED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CALLBACK_CONTACTS_HANDLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('API_CONTACTS_HANDLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OCCUPANCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('HANDLE_TIME'),
                                new \PHPStan\Type\Constant\ConstantStringType('AFTER_CONTACT_WORK_TIME'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUEUED_TIME'),
                                new \PHPStan\Type\Constant\ConstantStringType('ABANDON_TIME'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUEUE_ANSWER_TIME'),
                                new \PHPStan\Type\Constant\ConstantStringType('HOLD_TIME'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERACTION_TIME'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERACTION_AND_HOLD_TIME'),
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_LEVEL'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThresholdValue'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('LT'),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAX'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVG'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SECONDS'),
                                new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PERCENT'),
                            ]),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function getMetricDataV2(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricResults'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricInterval'),
                    new \PHPStan\Type\Constant\ConstantStringType('Collections'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FIFTEEN_MIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('THIRTY_MIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEEK'),
                            new \PHPStan\Type\Constant\ConstantStringType('TOTAL'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricFilters'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThresholdValue'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricFilterKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricFilterValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('Negate'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function getPromptFile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PromptPresignedUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTaskTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('ContactFlowId'),
                new \PHPStan\Type\Constant\ConstantStringType('SelfAssignFlowId'),
                new \PHPStan\Type\Constant\ConstantStringType('Constraints'),
                new \PHPStan\Type\Constant\ConstantStringType('Defaults'),
                new \PHPStan\Type\Constant\ConstantStringType('Fields'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RequiredFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadOnlyFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvisibleFields'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultFieldValues'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('SingleSelectOptions'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('DESCRIPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED_TIME'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUICK_CONNECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_AREA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATE_TIME'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('SINGLE_SELECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_ASSIGN'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRY_DURATION'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getTrafficDistribution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TelephonyConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('SignInConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('AgentConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Distributions'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('Percentage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Distributions'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Distributions'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('Percentage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function importPhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberId'),
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAgentStatuses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('AgentStatusSummaryList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFFLINE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listAnalyticsDataAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceShareId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceShareArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceShareStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAnalyticsDataLakeDataSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataSetName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listApprovedOrigins(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Origins'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssociatedContacts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ContactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitiationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisconnectTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitialContactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreviousContactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RelatedContactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitiationMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('Channel'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INBOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUTBOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSFER'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUE_TRANSFER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CALLBACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('API'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MONITOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_OUTBOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEBRTC_API'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_REPLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLOW'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAuthenticationProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationProfileSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LexBots'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LexBot'),
                    new \PHPStan\Type\Constant\ConstantStringType('LexV2Bot'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('LexRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AliasArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listContactEvaluations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormTitle'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluatorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Score'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Percentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFail'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listContactFlowModules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactFlowModulesSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listContactFlowVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactFlowVersionSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listContactFlows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactFlowSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactFlowType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactFlowState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactFlowStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONTACT_FLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_QUEUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_HOLD'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_WHISPER'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_HOLD'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_WHISPER'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUTBOUND_WHISPER'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_TRANSFER'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUE_TRANSFER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAMPAIGN'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listContactReferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReferenceSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('String'),
                    new \PHPStan\Type\Constant\ConstantStringType('Number'),
                    new \PHPStan\Type\Constant\ConstantStringType('Date'),
                    new \PHPStan\Type\Constant\ConstantStringType('Email'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDefaultVocabularies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DefaultVocabularyList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('VocabularyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VocabularyName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ar-AE'),
                        new \PHPStan\Type\Constant\ConstantStringType('de-CH'),
                        new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-AB'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-IE'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-IN'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-WL'),
                        new \PHPStan\Type\Constant\ConstantStringType('es-ES'),
                        new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi-IN'),
                        new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja-JP'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko-KR'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt-BR'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt-PT'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-CN'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-NZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-ZA'),
                        new \PHPStan\Type\Constant\ConstantStringType('ca-ES'),
                        new \PHPStan\Type\Constant\ConstantStringType('da-DK'),
                        new \PHPStan\Type\Constant\ConstantStringType('fi-FI'),
                        new \PHPStan\Type\Constant\ConstantStringType('id-ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('ms-MY'),
                        new \PHPStan\Type\Constant\ConstantStringType('nl-NL'),
                        new \PHPStan\Type\Constant\ConstantStringType('no-NO'),
                        new \PHPStan\Type\Constant\ConstantStringType('pl-PL'),
                        new \PHPStan\Type\Constant\ConstantStringType('sv-SE'),
                        new \PHPStan\Type\Constant\ConstantStringType('tl-PH'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEvaluationFormVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormVersionSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Locked'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEvaluationForms(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastActivatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastActivatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFlowAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowAssociationSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WHATSAPP_MESSAGING_PHONE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_PHONE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('INBOUND_EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUTBOUND_EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYTICS_CONNECTOR'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listHoursOfOperationOverrides(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationOverrideList'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationOverrideId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Config'),
                    new \PHPStan\Type\Constant\ConstantStringType('EffectiveFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('EffectiveTill'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Day'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function listHoursOfOperations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInstanceAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INBOUND_CALLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUTBOUND_CALLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTACTFLOW_LOGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTACT_LENS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO_RESOLVE_BEST_VOICES'),
                        new \PHPStan\Type\Constant\ConstantStringType('USE_CUSTOM_TTS_VOICES'),
                        new \PHPStan\Type\Constant\ConstantStringType('EARLY_MEDIA'),
                        new \PHPStan\Type\Constant\ConstantStringType('MULTI_PARTY_CONFERENCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH_VOLUME_OUTBOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENHANCED_CONTACT_MONITORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENHANCED_CHAT_MONITORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MULTI_PARTY_CHAT_CONFERENCE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInstanceStorageConfigs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StorageConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisVideoStreamConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisStreamConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('KINESIS_VIDEO_STREAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('KINESIS_STREAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('KINESIS_FIREHOSE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('BucketPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodHours'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StreamArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FirehoseArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityManagementType'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('InboundCallsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutboundCallsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceAccessUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECT_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXISTING_DIRECTORY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIntegrationAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationAssociationSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationAssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceApplicationUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('PINPOINT_APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('WISDOM_ASSISTANT'),
                        new \PHPStan\Type\Constant\ConstantStringType('WISDOM_KNOWLEDGE_BASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('WISDOM_QUICK_RESPONSES'),
                        new \PHPStan\Type\Constant\ConstantStringType('Q_MESSAGE_TEMPLATES'),
                        new \PHPStan\Type\Constant\ConstantStringType('CASES_DOMAIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FILE_SCANNER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SES_IDENTITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYTICS_CONNECTOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('CALL_TRANSFER_CONNECTOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('COGNITO_USER_POOL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZENDESK'),
                        new \PHPStan\Type\Constant\ConstantStringType('CASES'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLambdaFunctions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLexBots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LexBots'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('LexRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPhoneNumbers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberCountryCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TOLL_FREE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DID'),
                        new \PHPStan\Type\Constant\ConstantStringType('UIFN'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('THIRD_PARTY_TF'),
                        new \PHPStan\Type\Constant\ConstantStringType('THIRD_PARTY_DID'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHORT_CODE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AF'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL'),
                        new \PHPStan\Type\Constant\ConstantStringType('DZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('AS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AD'),
                        new \PHPStan\Type\Constant\ConstantStringType('AO'),
                        new \PHPStan\Type\Constant\ConstantStringType('AI'),
                        new \PHPStan\Type\Constant\ConstantStringType('AQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('AG'),
                        new \PHPStan\Type\Constant\ConstantStringType('AR'),
                        new \PHPStan\Type\Constant\ConstantStringType('AM'),
                        new \PHPStan\Type\Constant\ConstantStringType('AW'),
                        new \PHPStan\Type\Constant\ConstantStringType('AU'),
                        new \PHPStan\Type\Constant\ConstantStringType('AT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('BS'),
                        new \PHPStan\Type\Constant\ConstantStringType('BH'),
                        new \PHPStan\Type\Constant\ConstantStringType('BD'),
                        new \PHPStan\Type\Constant\ConstantStringType('BB'),
                        new \PHPStan\Type\Constant\ConstantStringType('BY'),
                        new \PHPStan\Type\Constant\ConstantStringType('BE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('BJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('BM'),
                        new \PHPStan\Type\Constant\ConstantStringType('BT'),
                        new \PHPStan\Type\Constant\ConstantStringType('BO'),
                        new \PHPStan\Type\Constant\ConstantStringType('BA'),
                        new \PHPStan\Type\Constant\ConstantStringType('BW'),
                        new \PHPStan\Type\Constant\ConstantStringType('BR'),
                        new \PHPStan\Type\Constant\ConstantStringType('IO'),
                        new \PHPStan\Type\Constant\ConstantStringType('VG'),
                        new \PHPStan\Type\Constant\ConstantStringType('BN'),
                        new \PHPStan\Type\Constant\ConstantStringType('BG'),
                        new \PHPStan\Type\Constant\ConstantStringType('BF'),
                        new \PHPStan\Type\Constant\ConstantStringType('BI'),
                        new \PHPStan\Type\Constant\ConstantStringType('KH'),
                        new \PHPStan\Type\Constant\ConstantStringType('CM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CA'),
                        new \PHPStan\Type\Constant\ConstantStringType('CV'),
                        new \PHPStan\Type\Constant\ConstantStringType('KY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CF'),
                        new \PHPStan\Type\Constant\ConstantStringType('TD'),
                        new \PHPStan\Type\Constant\ConstantStringType('CL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CX'),
                        new \PHPStan\Type\Constant\ConstantStringType('CC'),
                        new \PHPStan\Type\Constant\ConstantStringType('CO'),
                        new \PHPStan\Type\Constant\ConstantStringType('KM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CK'),
                        new \PHPStan\Type\Constant\ConstantStringType('CR'),
                        new \PHPStan\Type\Constant\ConstantStringType('HR'),
                        new \PHPStan\Type\Constant\ConstantStringType('CU'),
                        new \PHPStan\Type\Constant\ConstantStringType('CW'),
                        new \PHPStan\Type\Constant\ConstantStringType('CY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('CD'),
                        new \PHPStan\Type\Constant\ConstantStringType('DK'),
                        new \PHPStan\Type\Constant\ConstantStringType('DJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('DM'),
                        new \PHPStan\Type\Constant\ConstantStringType('DO'),
                        new \PHPStan\Type\Constant\ConstantStringType('TL'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC'),
                        new \PHPStan\Type\Constant\ConstantStringType('EG'),
                        new \PHPStan\Type\Constant\ConstantStringType('SV'),
                        new \PHPStan\Type\Constant\ConstantStringType('GQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('ER'),
                        new \PHPStan\Type\Constant\ConstantStringType('EE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ET'),
                        new \PHPStan\Type\Constant\ConstantStringType('FK'),
                        new \PHPStan\Type\Constant\ConstantStringType('FO'),
                        new \PHPStan\Type\Constant\ConstantStringType('FJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('FI'),
                        new \PHPStan\Type\Constant\ConstantStringType('FR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PF'),
                        new \PHPStan\Type\Constant\ConstantStringType('GA'),
                        new \PHPStan\Type\Constant\ConstantStringType('GM'),
                        new \PHPStan\Type\Constant\ConstantStringType('GE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GH'),
                        new \PHPStan\Type\Constant\ConstantStringType('GI'),
                        new \PHPStan\Type\Constant\ConstantStringType('GR'),
                        new \PHPStan\Type\Constant\ConstantStringType('GL'),
                        new \PHPStan\Type\Constant\ConstantStringType('GD'),
                        new \PHPStan\Type\Constant\ConstantStringType('GU'),
                        new \PHPStan\Type\Constant\ConstantStringType('GT'),
                        new \PHPStan\Type\Constant\ConstantStringType('GG'),
                        new \PHPStan\Type\Constant\ConstantStringType('GN'),
                        new \PHPStan\Type\Constant\ConstantStringType('GW'),
                        new \PHPStan\Type\Constant\ConstantStringType('GY'),
                        new \PHPStan\Type\Constant\ConstantStringType('HT'),
                        new \PHPStan\Type\Constant\ConstantStringType('HN'),
                        new \PHPStan\Type\Constant\ConstantStringType('HK'),
                        new \PHPStan\Type\Constant\ConstantStringType('HU'),
                        new \PHPStan\Type\Constant\ConstantStringType('IS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('IR'),
                        new \PHPStan\Type\Constant\ConstantStringType('IQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('IE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IM'),
                        new \PHPStan\Type\Constant\ConstantStringType('IL'),
                        new \PHPStan\Type\Constant\ConstantStringType('IT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CI'),
                        new \PHPStan\Type\Constant\ConstantStringType('JM'),
                        new \PHPStan\Type\Constant\ConstantStringType('JP'),
                        new \PHPStan\Type\Constant\ConstantStringType('JE'),
                        new \PHPStan\Type\Constant\ConstantStringType('JO'),
                        new \PHPStan\Type\Constant\ConstantStringType('KZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('KE'),
                        new \PHPStan\Type\Constant\ConstantStringType('KI'),
                        new \PHPStan\Type\Constant\ConstantStringType('KW'),
                        new \PHPStan\Type\Constant\ConstantStringType('KG'),
                        new \PHPStan\Type\Constant\ConstantStringType('LA'),
                        new \PHPStan\Type\Constant\ConstantStringType('LV'),
                        new \PHPStan\Type\Constant\ConstantStringType('LB'),
                        new \PHPStan\Type\Constant\ConstantStringType('LS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LR'),
                        new \PHPStan\Type\Constant\ConstantStringType('LY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LI'),
                        new \PHPStan\Type\Constant\ConstantStringType('LT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LU'),
                        new \PHPStan\Type\Constant\ConstantStringType('MO'),
                        new \PHPStan\Type\Constant\ConstantStringType('MK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MG'),
                        new \PHPStan\Type\Constant\ConstantStringType('MW'),
                        new \PHPStan\Type\Constant\ConstantStringType('MY'),
                        new \PHPStan\Type\Constant\ConstantStringType('MV'),
                        new \PHPStan\Type\Constant\ConstantStringType('ML'),
                        new \PHPStan\Type\Constant\ConstantStringType('MT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MR'),
                        new \PHPStan\Type\Constant\ConstantStringType('MU'),
                        new \PHPStan\Type\Constant\ConstantStringType('YT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MX'),
                        new \PHPStan\Type\Constant\ConstantStringType('FM'),
                        new \PHPStan\Type\Constant\ConstantStringType('MD'),
                        new \PHPStan\Type\Constant\ConstantStringType('MC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ME'),
                        new \PHPStan\Type\Constant\ConstantStringType('MS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MA'),
                        new \PHPStan\Type\Constant\ConstantStringType('MZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('MM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NA'),
                        new \PHPStan\Type\Constant\ConstantStringType('NR'),
                        new \PHPStan\Type\Constant\ConstantStringType('NP'),
                        new \PHPStan\Type\Constant\ConstantStringType('NL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AN'),
                        new \PHPStan\Type\Constant\ConstantStringType('NC'),
                        new \PHPStan\Type\Constant\ConstantStringType('NZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('NI'),
                        new \PHPStan\Type\Constant\ConstantStringType('NE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NG'),
                        new \PHPStan\Type\Constant\ConstantStringType('NU'),
                        new \PHPStan\Type\Constant\ConstantStringType('KP'),
                        new \PHPStan\Type\Constant\ConstantStringType('MP'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO'),
                        new \PHPStan\Type\Constant\ConstantStringType('OM'),
                        new \PHPStan\Type\Constant\ConstantStringType('PK'),
                        new \PHPStan\Type\Constant\ConstantStringType('PW'),
                        new \PHPStan\Type\Constant\ConstantStringType('PA'),
                        new \PHPStan\Type\Constant\ConstantStringType('PG'),
                        new \PHPStan\Type\Constant\ConstantStringType('PY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PH'),
                        new \PHPStan\Type\Constant\ConstantStringType('PN'),
                        new \PHPStan\Type\Constant\ConstantStringType('PL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PR'),
                        new \PHPStan\Type\Constant\ConstantStringType('QA'),
                        new \PHPStan\Type\Constant\ConstantStringType('CG'),
                        new \PHPStan\Type\Constant\ConstantStringType('RE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RO'),
                        new \PHPStan\Type\Constant\ConstantStringType('RU'),
                        new \PHPStan\Type\Constant\ConstantStringType('RW'),
                        new \PHPStan\Type\Constant\ConstantStringType('BL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SH'),
                        new \PHPStan\Type\Constant\ConstantStringType('KN'),
                        new \PHPStan\Type\Constant\ConstantStringType('LC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MF'),
                        new \PHPStan\Type\Constant\ConstantStringType('PM'),
                        new \PHPStan\Type\Constant\ConstantStringType('VC'),
                        new \PHPStan\Type\Constant\ConstantStringType('WS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SM'),
                        new \PHPStan\Type\Constant\ConstantStringType('ST'),
                        new \PHPStan\Type\Constant\ConstantStringType('SA'),
                        new \PHPStan\Type\Constant\ConstantStringType('SN'),
                        new \PHPStan\Type\Constant\ConstantStringType('RS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SC'),
                        new \PHPStan\Type\Constant\ConstantStringType('SL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SG'),
                        new \PHPStan\Type\Constant\ConstantStringType('SX'),
                        new \PHPStan\Type\Constant\ConstantStringType('SK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SI'),
                        new \PHPStan\Type\Constant\ConstantStringType('SB'),
                        new \PHPStan\Type\Constant\ConstantStringType('SO'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZA'),
                        new \PHPStan\Type\Constant\ConstantStringType('KR'),
                        new \PHPStan\Type\Constant\ConstantStringType('ES'),
                        new \PHPStan\Type\Constant\ConstantStringType('LK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SD'),
                        new \PHPStan\Type\Constant\ConstantStringType('SR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('SZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('SE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CH'),
                        new \PHPStan\Type\Constant\ConstantStringType('SY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TW'),
                        new \PHPStan\Type\Constant\ConstantStringType('TJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('TZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('TH'),
                        new \PHPStan\Type\Constant\ConstantStringType('TG'),
                        new \PHPStan\Type\Constant\ConstantStringType('TK'),
                        new \PHPStan\Type\Constant\ConstantStringType('TO'),
                        new \PHPStan\Type\Constant\ConstantStringType('TT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TN'),
                        new \PHPStan\Type\Constant\ConstantStringType('TR'),
                        new \PHPStan\Type\Constant\ConstantStringType('TM'),
                        new \PHPStan\Type\Constant\ConstantStringType('TC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TV'),
                        new \PHPStan\Type\Constant\ConstantStringType('VI'),
                        new \PHPStan\Type\Constant\ConstantStringType('UG'),
                        new \PHPStan\Type\Constant\ConstantStringType('UA'),
                        new \PHPStan\Type\Constant\ConstantStringType('AE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('US'),
                        new \PHPStan\Type\Constant\ConstantStringType('UY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('VU'),
                        new \PHPStan\Type\Constant\ConstantStringType('VA'),
                        new \PHPStan\Type\Constant\ConstantStringType('VE'),
                        new \PHPStan\Type\Constant\ConstantStringType('VN'),
                        new \PHPStan\Type\Constant\ConstantStringType('WF'),
                        new \PHPStan\Type\Constant\ConstantStringType('EH'),
                        new \PHPStan\Type\Constant\ConstantStringType('YE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZM'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZW'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPhoneNumbersV2(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ListPhoneNumbersSummaryList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberCountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourcePhoneNumberArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AF'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL'),
                        new \PHPStan\Type\Constant\ConstantStringType('DZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('AS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AD'),
                        new \PHPStan\Type\Constant\ConstantStringType('AO'),
                        new \PHPStan\Type\Constant\ConstantStringType('AI'),
                        new \PHPStan\Type\Constant\ConstantStringType('AQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('AG'),
                        new \PHPStan\Type\Constant\ConstantStringType('AR'),
                        new \PHPStan\Type\Constant\ConstantStringType('AM'),
                        new \PHPStan\Type\Constant\ConstantStringType('AW'),
                        new \PHPStan\Type\Constant\ConstantStringType('AU'),
                        new \PHPStan\Type\Constant\ConstantStringType('AT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('BS'),
                        new \PHPStan\Type\Constant\ConstantStringType('BH'),
                        new \PHPStan\Type\Constant\ConstantStringType('BD'),
                        new \PHPStan\Type\Constant\ConstantStringType('BB'),
                        new \PHPStan\Type\Constant\ConstantStringType('BY'),
                        new \PHPStan\Type\Constant\ConstantStringType('BE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('BJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('BM'),
                        new \PHPStan\Type\Constant\ConstantStringType('BT'),
                        new \PHPStan\Type\Constant\ConstantStringType('BO'),
                        new \PHPStan\Type\Constant\ConstantStringType('BA'),
                        new \PHPStan\Type\Constant\ConstantStringType('BW'),
                        new \PHPStan\Type\Constant\ConstantStringType('BR'),
                        new \PHPStan\Type\Constant\ConstantStringType('IO'),
                        new \PHPStan\Type\Constant\ConstantStringType('VG'),
                        new \PHPStan\Type\Constant\ConstantStringType('BN'),
                        new \PHPStan\Type\Constant\ConstantStringType('BG'),
                        new \PHPStan\Type\Constant\ConstantStringType('BF'),
                        new \PHPStan\Type\Constant\ConstantStringType('BI'),
                        new \PHPStan\Type\Constant\ConstantStringType('KH'),
                        new \PHPStan\Type\Constant\ConstantStringType('CM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CA'),
                        new \PHPStan\Type\Constant\ConstantStringType('CV'),
                        new \PHPStan\Type\Constant\ConstantStringType('KY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CF'),
                        new \PHPStan\Type\Constant\ConstantStringType('TD'),
                        new \PHPStan\Type\Constant\ConstantStringType('CL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CX'),
                        new \PHPStan\Type\Constant\ConstantStringType('CC'),
                        new \PHPStan\Type\Constant\ConstantStringType('CO'),
                        new \PHPStan\Type\Constant\ConstantStringType('KM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CK'),
                        new \PHPStan\Type\Constant\ConstantStringType('CR'),
                        new \PHPStan\Type\Constant\ConstantStringType('HR'),
                        new \PHPStan\Type\Constant\ConstantStringType('CU'),
                        new \PHPStan\Type\Constant\ConstantStringType('CW'),
                        new \PHPStan\Type\Constant\ConstantStringType('CY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('CD'),
                        new \PHPStan\Type\Constant\ConstantStringType('DK'),
                        new \PHPStan\Type\Constant\ConstantStringType('DJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('DM'),
                        new \PHPStan\Type\Constant\ConstantStringType('DO'),
                        new \PHPStan\Type\Constant\ConstantStringType('TL'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC'),
                        new \PHPStan\Type\Constant\ConstantStringType('EG'),
                        new \PHPStan\Type\Constant\ConstantStringType('SV'),
                        new \PHPStan\Type\Constant\ConstantStringType('GQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('ER'),
                        new \PHPStan\Type\Constant\ConstantStringType('EE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ET'),
                        new \PHPStan\Type\Constant\ConstantStringType('FK'),
                        new \PHPStan\Type\Constant\ConstantStringType('FO'),
                        new \PHPStan\Type\Constant\ConstantStringType('FJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('FI'),
                        new \PHPStan\Type\Constant\ConstantStringType('FR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PF'),
                        new \PHPStan\Type\Constant\ConstantStringType('GA'),
                        new \PHPStan\Type\Constant\ConstantStringType('GM'),
                        new \PHPStan\Type\Constant\ConstantStringType('GE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GH'),
                        new \PHPStan\Type\Constant\ConstantStringType('GI'),
                        new \PHPStan\Type\Constant\ConstantStringType('GR'),
                        new \PHPStan\Type\Constant\ConstantStringType('GL'),
                        new \PHPStan\Type\Constant\ConstantStringType('GD'),
                        new \PHPStan\Type\Constant\ConstantStringType('GU'),
                        new \PHPStan\Type\Constant\ConstantStringType('GT'),
                        new \PHPStan\Type\Constant\ConstantStringType('GG'),
                        new \PHPStan\Type\Constant\ConstantStringType('GN'),
                        new \PHPStan\Type\Constant\ConstantStringType('GW'),
                        new \PHPStan\Type\Constant\ConstantStringType('GY'),
                        new \PHPStan\Type\Constant\ConstantStringType('HT'),
                        new \PHPStan\Type\Constant\ConstantStringType('HN'),
                        new \PHPStan\Type\Constant\ConstantStringType('HK'),
                        new \PHPStan\Type\Constant\ConstantStringType('HU'),
                        new \PHPStan\Type\Constant\ConstantStringType('IS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('IR'),
                        new \PHPStan\Type\Constant\ConstantStringType('IQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('IE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IM'),
                        new \PHPStan\Type\Constant\ConstantStringType('IL'),
                        new \PHPStan\Type\Constant\ConstantStringType('IT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CI'),
                        new \PHPStan\Type\Constant\ConstantStringType('JM'),
                        new \PHPStan\Type\Constant\ConstantStringType('JP'),
                        new \PHPStan\Type\Constant\ConstantStringType('JE'),
                        new \PHPStan\Type\Constant\ConstantStringType('JO'),
                        new \PHPStan\Type\Constant\ConstantStringType('KZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('KE'),
                        new \PHPStan\Type\Constant\ConstantStringType('KI'),
                        new \PHPStan\Type\Constant\ConstantStringType('KW'),
                        new \PHPStan\Type\Constant\ConstantStringType('KG'),
                        new \PHPStan\Type\Constant\ConstantStringType('LA'),
                        new \PHPStan\Type\Constant\ConstantStringType('LV'),
                        new \PHPStan\Type\Constant\ConstantStringType('LB'),
                        new \PHPStan\Type\Constant\ConstantStringType('LS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LR'),
                        new \PHPStan\Type\Constant\ConstantStringType('LY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LI'),
                        new \PHPStan\Type\Constant\ConstantStringType('LT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LU'),
                        new \PHPStan\Type\Constant\ConstantStringType('MO'),
                        new \PHPStan\Type\Constant\ConstantStringType('MK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MG'),
                        new \PHPStan\Type\Constant\ConstantStringType('MW'),
                        new \PHPStan\Type\Constant\ConstantStringType('MY'),
                        new \PHPStan\Type\Constant\ConstantStringType('MV'),
                        new \PHPStan\Type\Constant\ConstantStringType('ML'),
                        new \PHPStan\Type\Constant\ConstantStringType('MT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MR'),
                        new \PHPStan\Type\Constant\ConstantStringType('MU'),
                        new \PHPStan\Type\Constant\ConstantStringType('YT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MX'),
                        new \PHPStan\Type\Constant\ConstantStringType('FM'),
                        new \PHPStan\Type\Constant\ConstantStringType('MD'),
                        new \PHPStan\Type\Constant\ConstantStringType('MC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ME'),
                        new \PHPStan\Type\Constant\ConstantStringType('MS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MA'),
                        new \PHPStan\Type\Constant\ConstantStringType('MZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('MM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NA'),
                        new \PHPStan\Type\Constant\ConstantStringType('NR'),
                        new \PHPStan\Type\Constant\ConstantStringType('NP'),
                        new \PHPStan\Type\Constant\ConstantStringType('NL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AN'),
                        new \PHPStan\Type\Constant\ConstantStringType('NC'),
                        new \PHPStan\Type\Constant\ConstantStringType('NZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('NI'),
                        new \PHPStan\Type\Constant\ConstantStringType('NE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NG'),
                        new \PHPStan\Type\Constant\ConstantStringType('NU'),
                        new \PHPStan\Type\Constant\ConstantStringType('KP'),
                        new \PHPStan\Type\Constant\ConstantStringType('MP'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO'),
                        new \PHPStan\Type\Constant\ConstantStringType('OM'),
                        new \PHPStan\Type\Constant\ConstantStringType('PK'),
                        new \PHPStan\Type\Constant\ConstantStringType('PW'),
                        new \PHPStan\Type\Constant\ConstantStringType('PA'),
                        new \PHPStan\Type\Constant\ConstantStringType('PG'),
                        new \PHPStan\Type\Constant\ConstantStringType('PY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PH'),
                        new \PHPStan\Type\Constant\ConstantStringType('PN'),
                        new \PHPStan\Type\Constant\ConstantStringType('PL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PR'),
                        new \PHPStan\Type\Constant\ConstantStringType('QA'),
                        new \PHPStan\Type\Constant\ConstantStringType('CG'),
                        new \PHPStan\Type\Constant\ConstantStringType('RE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RO'),
                        new \PHPStan\Type\Constant\ConstantStringType('RU'),
                        new \PHPStan\Type\Constant\ConstantStringType('RW'),
                        new \PHPStan\Type\Constant\ConstantStringType('BL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SH'),
                        new \PHPStan\Type\Constant\ConstantStringType('KN'),
                        new \PHPStan\Type\Constant\ConstantStringType('LC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MF'),
                        new \PHPStan\Type\Constant\ConstantStringType('PM'),
                        new \PHPStan\Type\Constant\ConstantStringType('VC'),
                        new \PHPStan\Type\Constant\ConstantStringType('WS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SM'),
                        new \PHPStan\Type\Constant\ConstantStringType('ST'),
                        new \PHPStan\Type\Constant\ConstantStringType('SA'),
                        new \PHPStan\Type\Constant\ConstantStringType('SN'),
                        new \PHPStan\Type\Constant\ConstantStringType('RS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SC'),
                        new \PHPStan\Type\Constant\ConstantStringType('SL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SG'),
                        new \PHPStan\Type\Constant\ConstantStringType('SX'),
                        new \PHPStan\Type\Constant\ConstantStringType('SK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SI'),
                        new \PHPStan\Type\Constant\ConstantStringType('SB'),
                        new \PHPStan\Type\Constant\ConstantStringType('SO'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZA'),
                        new \PHPStan\Type\Constant\ConstantStringType('KR'),
                        new \PHPStan\Type\Constant\ConstantStringType('ES'),
                        new \PHPStan\Type\Constant\ConstantStringType('LK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SD'),
                        new \PHPStan\Type\Constant\ConstantStringType('SR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('SZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('SE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CH'),
                        new \PHPStan\Type\Constant\ConstantStringType('SY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TW'),
                        new \PHPStan\Type\Constant\ConstantStringType('TJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('TZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('TH'),
                        new \PHPStan\Type\Constant\ConstantStringType('TG'),
                        new \PHPStan\Type\Constant\ConstantStringType('TK'),
                        new \PHPStan\Type\Constant\ConstantStringType('TO'),
                        new \PHPStan\Type\Constant\ConstantStringType('TT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TN'),
                        new \PHPStan\Type\Constant\ConstantStringType('TR'),
                        new \PHPStan\Type\Constant\ConstantStringType('TM'),
                        new \PHPStan\Type\Constant\ConstantStringType('TC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TV'),
                        new \PHPStan\Type\Constant\ConstantStringType('VI'),
                        new \PHPStan\Type\Constant\ConstantStringType('UG'),
                        new \PHPStan\Type\Constant\ConstantStringType('UA'),
                        new \PHPStan\Type\Constant\ConstantStringType('AE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('US'),
                        new \PHPStan\Type\Constant\ConstantStringType('UY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('VU'),
                        new \PHPStan\Type\Constant\ConstantStringType('VA'),
                        new \PHPStan\Type\Constant\ConstantStringType('VE'),
                        new \PHPStan\Type\Constant\ConstantStringType('VN'),
                        new \PHPStan\Type\Constant\ConstantStringType('WF'),
                        new \PHPStan\Type\Constant\ConstantStringType('EH'),
                        new \PHPStan\Type\Constant\ConstantStringType('YE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZM'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZW'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TOLL_FREE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DID'),
                        new \PHPStan\Type\Constant\ConstantStringType('UIFN'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('THIRD_PARTY_TF'),
                        new \PHPStan\Type\Constant\ConstantStringType('THIRD_PARTY_DID'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHORT_CODE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listPredefinedAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('PredefinedAttributeSummaryList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listPrompts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PromptSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listQueueQuickConnects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('QuickConnectSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuickConnectType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE_NUMBER'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listQueues(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueueSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueueType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listQuickConnects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QuickConnectSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuickConnectType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE_NUMBER'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRealtimeContactAnalysisSegmentsV2(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Channel'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Segments'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Transcript'),
                    new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    new \PHPStan\Type\Constant\ConstantStringType('Issues'),
                    new \PHPStan\Type\Constant\ConstantStringType('Event'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostContactSummary'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParticipantId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParticipantRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Time'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redaction'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sentiment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_BOT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUPERVISOR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AbsoluteTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CharacterOffsets'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BeginOffsetChar'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndOffsetChar'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('POSITIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEUTRAL'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MatchedDetails'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PointsOfInterest'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TranscriptItems'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CharacterOffsets'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BeginOffsetChar'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EndOffsetChar'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ])),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IssuesDetected'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TranscriptItems'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Content'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('CharacterOffsets'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BeginOffsetChar'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndOffsetChar'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ])),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParticipantId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParticipantRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Time'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_BOT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUPERVISOR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AbsoluteTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParticipantId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParticipantRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attachments'),
                        new \PHPStan\Type\Constant\ConstantStringType('Time'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_BOT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUPERVISOR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AbsoluteTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_CONVERSATION_CONTENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_SAFETY_GUIDELINES'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_ANALYSIS_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRoutingProfileQueues(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('RoutingProfileQueueConfigSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QueueId'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueueArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueueName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    new \PHPStan\Type\Constant\ConstantStringType('Delay'),
                    new \PHPStan\Type\Constant\ConstantStringType('Channel'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRoutingProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RoutingProfileSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RuleSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventSourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublishStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionSummaries'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OnPostCallAnalysisAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnRealTimeCallAnalysisAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnRealTimeChatAnalysisAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnPostChatAnalysisAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnZendeskTicketCreate'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnZendeskTicketStatusUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnSalesforceCaseCreate'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnContactEvaluationSubmit'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnMetricDataUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnCaseCreate'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnCaseUpdate'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActionType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_TASK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSIGN_CONTACT_CATEGORY'),
                            new \PHPStan\Type\Constant\ConstantStringType('GENERATE_EVENTBRIDGE_EVENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEND_NOTIFICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_CASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_CASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('END_ASSOCIATED_TASKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBMIT_AUTO_EVALUATION'),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSecurityKeys(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SecurityKeys'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSecurityProfileApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Applications'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationPermissions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSecurityProfilePermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSecurityProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SecurityProfileSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listTaskTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TaskTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTrafficDistributionGroupUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('TrafficDistributionGroupUserSummaryList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listTrafficDistributionGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('TrafficDistributionGroupSummaryList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function listUseCases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UseCaseSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UseCaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UseCaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('UseCaseType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RULES_EVALUATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECT_CAMPAIGNS'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listUserHierarchyGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserHierarchyGroupSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listUserProficiencies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('UserProficiencyList'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('Level'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listViewVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ViewVersionSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionDescription'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listViews(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ViewsSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function monitorContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactId'),
                new \PHPStan\Type\Constant\ConstantStringType('ContactArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function pauseContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putUserStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function releasePhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function replicateInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function resumeContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function resumeContactRecording(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function searchAgentStatuses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AgentStatuses'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateTotalCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AgentStatusARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('AgentStatusId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayOrder'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFFLINE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchAvailablePhoneNumbers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('AvailableNumbersList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberCountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AF'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL'),
                        new \PHPStan\Type\Constant\ConstantStringType('DZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('AS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AD'),
                        new \PHPStan\Type\Constant\ConstantStringType('AO'),
                        new \PHPStan\Type\Constant\ConstantStringType('AI'),
                        new \PHPStan\Type\Constant\ConstantStringType('AQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('AG'),
                        new \PHPStan\Type\Constant\ConstantStringType('AR'),
                        new \PHPStan\Type\Constant\ConstantStringType('AM'),
                        new \PHPStan\Type\Constant\ConstantStringType('AW'),
                        new \PHPStan\Type\Constant\ConstantStringType('AU'),
                        new \PHPStan\Type\Constant\ConstantStringType('AT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('BS'),
                        new \PHPStan\Type\Constant\ConstantStringType('BH'),
                        new \PHPStan\Type\Constant\ConstantStringType('BD'),
                        new \PHPStan\Type\Constant\ConstantStringType('BB'),
                        new \PHPStan\Type\Constant\ConstantStringType('BY'),
                        new \PHPStan\Type\Constant\ConstantStringType('BE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('BJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('BM'),
                        new \PHPStan\Type\Constant\ConstantStringType('BT'),
                        new \PHPStan\Type\Constant\ConstantStringType('BO'),
                        new \PHPStan\Type\Constant\ConstantStringType('BA'),
                        new \PHPStan\Type\Constant\ConstantStringType('BW'),
                        new \PHPStan\Type\Constant\ConstantStringType('BR'),
                        new \PHPStan\Type\Constant\ConstantStringType('IO'),
                        new \PHPStan\Type\Constant\ConstantStringType('VG'),
                        new \PHPStan\Type\Constant\ConstantStringType('BN'),
                        new \PHPStan\Type\Constant\ConstantStringType('BG'),
                        new \PHPStan\Type\Constant\ConstantStringType('BF'),
                        new \PHPStan\Type\Constant\ConstantStringType('BI'),
                        new \PHPStan\Type\Constant\ConstantStringType('KH'),
                        new \PHPStan\Type\Constant\ConstantStringType('CM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CA'),
                        new \PHPStan\Type\Constant\ConstantStringType('CV'),
                        new \PHPStan\Type\Constant\ConstantStringType('KY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CF'),
                        new \PHPStan\Type\Constant\ConstantStringType('TD'),
                        new \PHPStan\Type\Constant\ConstantStringType('CL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CX'),
                        new \PHPStan\Type\Constant\ConstantStringType('CC'),
                        new \PHPStan\Type\Constant\ConstantStringType('CO'),
                        new \PHPStan\Type\Constant\ConstantStringType('KM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CK'),
                        new \PHPStan\Type\Constant\ConstantStringType('CR'),
                        new \PHPStan\Type\Constant\ConstantStringType('HR'),
                        new \PHPStan\Type\Constant\ConstantStringType('CU'),
                        new \PHPStan\Type\Constant\ConstantStringType('CW'),
                        new \PHPStan\Type\Constant\ConstantStringType('CY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('CD'),
                        new \PHPStan\Type\Constant\ConstantStringType('DK'),
                        new \PHPStan\Type\Constant\ConstantStringType('DJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('DM'),
                        new \PHPStan\Type\Constant\ConstantStringType('DO'),
                        new \PHPStan\Type\Constant\ConstantStringType('TL'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC'),
                        new \PHPStan\Type\Constant\ConstantStringType('EG'),
                        new \PHPStan\Type\Constant\ConstantStringType('SV'),
                        new \PHPStan\Type\Constant\ConstantStringType('GQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('ER'),
                        new \PHPStan\Type\Constant\ConstantStringType('EE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ET'),
                        new \PHPStan\Type\Constant\ConstantStringType('FK'),
                        new \PHPStan\Type\Constant\ConstantStringType('FO'),
                        new \PHPStan\Type\Constant\ConstantStringType('FJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('FI'),
                        new \PHPStan\Type\Constant\ConstantStringType('FR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PF'),
                        new \PHPStan\Type\Constant\ConstantStringType('GA'),
                        new \PHPStan\Type\Constant\ConstantStringType('GM'),
                        new \PHPStan\Type\Constant\ConstantStringType('GE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GH'),
                        new \PHPStan\Type\Constant\ConstantStringType('GI'),
                        new \PHPStan\Type\Constant\ConstantStringType('GR'),
                        new \PHPStan\Type\Constant\ConstantStringType('GL'),
                        new \PHPStan\Type\Constant\ConstantStringType('GD'),
                        new \PHPStan\Type\Constant\ConstantStringType('GU'),
                        new \PHPStan\Type\Constant\ConstantStringType('GT'),
                        new \PHPStan\Type\Constant\ConstantStringType('GG'),
                        new \PHPStan\Type\Constant\ConstantStringType('GN'),
                        new \PHPStan\Type\Constant\ConstantStringType('GW'),
                        new \PHPStan\Type\Constant\ConstantStringType('GY'),
                        new \PHPStan\Type\Constant\ConstantStringType('HT'),
                        new \PHPStan\Type\Constant\ConstantStringType('HN'),
                        new \PHPStan\Type\Constant\ConstantStringType('HK'),
                        new \PHPStan\Type\Constant\ConstantStringType('HU'),
                        new \PHPStan\Type\Constant\ConstantStringType('IS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('IR'),
                        new \PHPStan\Type\Constant\ConstantStringType('IQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('IE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IM'),
                        new \PHPStan\Type\Constant\ConstantStringType('IL'),
                        new \PHPStan\Type\Constant\ConstantStringType('IT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CI'),
                        new \PHPStan\Type\Constant\ConstantStringType('JM'),
                        new \PHPStan\Type\Constant\ConstantStringType('JP'),
                        new \PHPStan\Type\Constant\ConstantStringType('JE'),
                        new \PHPStan\Type\Constant\ConstantStringType('JO'),
                        new \PHPStan\Type\Constant\ConstantStringType('KZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('KE'),
                        new \PHPStan\Type\Constant\ConstantStringType('KI'),
                        new \PHPStan\Type\Constant\ConstantStringType('KW'),
                        new \PHPStan\Type\Constant\ConstantStringType('KG'),
                        new \PHPStan\Type\Constant\ConstantStringType('LA'),
                        new \PHPStan\Type\Constant\ConstantStringType('LV'),
                        new \PHPStan\Type\Constant\ConstantStringType('LB'),
                        new \PHPStan\Type\Constant\ConstantStringType('LS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LR'),
                        new \PHPStan\Type\Constant\ConstantStringType('LY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LI'),
                        new \PHPStan\Type\Constant\ConstantStringType('LT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LU'),
                        new \PHPStan\Type\Constant\ConstantStringType('MO'),
                        new \PHPStan\Type\Constant\ConstantStringType('MK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MG'),
                        new \PHPStan\Type\Constant\ConstantStringType('MW'),
                        new \PHPStan\Type\Constant\ConstantStringType('MY'),
                        new \PHPStan\Type\Constant\ConstantStringType('MV'),
                        new \PHPStan\Type\Constant\ConstantStringType('ML'),
                        new \PHPStan\Type\Constant\ConstantStringType('MT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MR'),
                        new \PHPStan\Type\Constant\ConstantStringType('MU'),
                        new \PHPStan\Type\Constant\ConstantStringType('YT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MX'),
                        new \PHPStan\Type\Constant\ConstantStringType('FM'),
                        new \PHPStan\Type\Constant\ConstantStringType('MD'),
                        new \PHPStan\Type\Constant\ConstantStringType('MC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ME'),
                        new \PHPStan\Type\Constant\ConstantStringType('MS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MA'),
                        new \PHPStan\Type\Constant\ConstantStringType('MZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('MM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NA'),
                        new \PHPStan\Type\Constant\ConstantStringType('NR'),
                        new \PHPStan\Type\Constant\ConstantStringType('NP'),
                        new \PHPStan\Type\Constant\ConstantStringType('NL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AN'),
                        new \PHPStan\Type\Constant\ConstantStringType('NC'),
                        new \PHPStan\Type\Constant\ConstantStringType('NZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('NI'),
                        new \PHPStan\Type\Constant\ConstantStringType('NE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NG'),
                        new \PHPStan\Type\Constant\ConstantStringType('NU'),
                        new \PHPStan\Type\Constant\ConstantStringType('KP'),
                        new \PHPStan\Type\Constant\ConstantStringType('MP'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO'),
                        new \PHPStan\Type\Constant\ConstantStringType('OM'),
                        new \PHPStan\Type\Constant\ConstantStringType('PK'),
                        new \PHPStan\Type\Constant\ConstantStringType('PW'),
                        new \PHPStan\Type\Constant\ConstantStringType('PA'),
                        new \PHPStan\Type\Constant\ConstantStringType('PG'),
                        new \PHPStan\Type\Constant\ConstantStringType('PY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PH'),
                        new \PHPStan\Type\Constant\ConstantStringType('PN'),
                        new \PHPStan\Type\Constant\ConstantStringType('PL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PR'),
                        new \PHPStan\Type\Constant\ConstantStringType('QA'),
                        new \PHPStan\Type\Constant\ConstantStringType('CG'),
                        new \PHPStan\Type\Constant\ConstantStringType('RE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RO'),
                        new \PHPStan\Type\Constant\ConstantStringType('RU'),
                        new \PHPStan\Type\Constant\ConstantStringType('RW'),
                        new \PHPStan\Type\Constant\ConstantStringType('BL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SH'),
                        new \PHPStan\Type\Constant\ConstantStringType('KN'),
                        new \PHPStan\Type\Constant\ConstantStringType('LC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MF'),
                        new \PHPStan\Type\Constant\ConstantStringType('PM'),
                        new \PHPStan\Type\Constant\ConstantStringType('VC'),
                        new \PHPStan\Type\Constant\ConstantStringType('WS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SM'),
                        new \PHPStan\Type\Constant\ConstantStringType('ST'),
                        new \PHPStan\Type\Constant\ConstantStringType('SA'),
                        new \PHPStan\Type\Constant\ConstantStringType('SN'),
                        new \PHPStan\Type\Constant\ConstantStringType('RS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SC'),
                        new \PHPStan\Type\Constant\ConstantStringType('SL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SG'),
                        new \PHPStan\Type\Constant\ConstantStringType('SX'),
                        new \PHPStan\Type\Constant\ConstantStringType('SK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SI'),
                        new \PHPStan\Type\Constant\ConstantStringType('SB'),
                        new \PHPStan\Type\Constant\ConstantStringType('SO'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZA'),
                        new \PHPStan\Type\Constant\ConstantStringType('KR'),
                        new \PHPStan\Type\Constant\ConstantStringType('ES'),
                        new \PHPStan\Type\Constant\ConstantStringType('LK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SD'),
                        new \PHPStan\Type\Constant\ConstantStringType('SR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('SZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('SE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CH'),
                        new \PHPStan\Type\Constant\ConstantStringType('SY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TW'),
                        new \PHPStan\Type\Constant\ConstantStringType('TJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('TZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('TH'),
                        new \PHPStan\Type\Constant\ConstantStringType('TG'),
                        new \PHPStan\Type\Constant\ConstantStringType('TK'),
                        new \PHPStan\Type\Constant\ConstantStringType('TO'),
                        new \PHPStan\Type\Constant\ConstantStringType('TT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TN'),
                        new \PHPStan\Type\Constant\ConstantStringType('TR'),
                        new \PHPStan\Type\Constant\ConstantStringType('TM'),
                        new \PHPStan\Type\Constant\ConstantStringType('TC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TV'),
                        new \PHPStan\Type\Constant\ConstantStringType('VI'),
                        new \PHPStan\Type\Constant\ConstantStringType('UG'),
                        new \PHPStan\Type\Constant\ConstantStringType('UA'),
                        new \PHPStan\Type\Constant\ConstantStringType('AE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('US'),
                        new \PHPStan\Type\Constant\ConstantStringType('UY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('VU'),
                        new \PHPStan\Type\Constant\ConstantStringType('VA'),
                        new \PHPStan\Type\Constant\ConstantStringType('VE'),
                        new \PHPStan\Type\Constant\ConstantStringType('VN'),
                        new \PHPStan\Type\Constant\ConstantStringType('WF'),
                        new \PHPStan\Type\Constant\ConstantStringType('EH'),
                        new \PHPStan\Type\Constant\ConstantStringType('YE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZM'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZW'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TOLL_FREE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DID'),
                        new \PHPStan\Type\Constant\ConstantStringType('UIFN'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('THIRD_PARTY_TF'),
                        new \PHPStan\Type\Constant\ConstantStringType('THIRD_PARTY_DID'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHORT_CODE'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function searchContactFlowModules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactFlowModules'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateTotalCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchContactFlows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactFlows'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateTotalCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowContentSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONTACT_FLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_QUEUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_HOLD'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_WHISPER'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_HOLD'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_WHISPER'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUTBOUND_WHISPER'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_TRANSFER'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUE_TRANSFER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAMPAIGN'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchContacts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Contacts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitialContactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreviousContactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitiationMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('Channel'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueueInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AgentInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitiationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisconnectTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduledTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentAttributes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INBOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUTBOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSFER'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUE_TRANSFER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CALLBACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('API'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MONITOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_OUTBOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEBRTC_API'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_REPLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLOW'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnqueueTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectedToAgentTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ValueString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchEmailAddresses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('EmailAddresses'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateTotalCount'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddressId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddressArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchHoursOfOperationOverrides(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationOverrides'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateTotalCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationOverrideId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Config'),
                    new \PHPStan\Type\Constant\ConstantStringType('EffectiveFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('EffectiveTill'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Day'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchHoursOfOperations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateTotalCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('Config'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Day'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchPredefinedAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PredefinedAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateTotalCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StringList'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchPrompts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Prompts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateTotalCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PromptARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('PromptId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchQueues(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Queues'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateTotalCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueueArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueueId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutboundCallerConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutboundEmailConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('HoursOfOperationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxContacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundCallerIdName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundCallerIdNumberId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundFlowId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundEmailAddressId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchQuickConnects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QuickConnects'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateTotalCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QuickConnectARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuickConnectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuickConnectConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('QuickConnectType'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueueConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUEUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE_NUMBER'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContactFlowId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('QueueId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContactFlowId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchResourceTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchRoutingProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RoutingProfiles'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateTotalCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoutingProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoutingProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaConcurrencies'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultOutboundQueueId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssociatedQueues'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssociatedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('AgentAvailabilityTimer'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedQueueIds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Channel'),
                        new \PHPStan\Type\Constant\ConstantStringType('Concurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrossChannelBehavior'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BehaviorType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ROUTE_CURRENT_CHANNEL_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROUTE_ANY_CHANNEL'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TIME_SINCE_LAST_ACTIVITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIME_SINCE_LAST_INBOUND'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchSecurityProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SecurityProfiles'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateTotalCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchUserHierarchyGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserHierarchyGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateTotalCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('LevelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HierarchyPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LevelOne'),
                        new \PHPStan\Type\Constant\ConstantStringType('LevelTwo'),
                        new \PHPStan\Type\Constant\ConstantStringType('LevelThree'),
                        new \PHPStan\Type\Constant\ConstantStringType('LevelFour'),
                        new \PHPStan\Type\Constant\ConstantStringType('LevelFive'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedRegion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Users'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateTotalCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryUserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HierarchyGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoutingProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityProfileIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FirstName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoAccept'),
                        new \PHPStan\Type\Constant\ConstantStringType('AfterContactWorkTimeLimit'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeskPhoneNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOFT_PHONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DESK_PHONE'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchVocabularies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VocabularySummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ar-AE'),
                        new \PHPStan\Type\Constant\ConstantStringType('de-CH'),
                        new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-AB'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-IE'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-IN'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-WL'),
                        new \PHPStan\Type\Constant\ConstantStringType('es-ES'),
                        new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi-IN'),
                        new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja-JP'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko-KR'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt-BR'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt-PT'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-CN'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-NZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-ZA'),
                        new \PHPStan\Type\Constant\ConstantStringType('ca-ES'),
                        new \PHPStan\Type\Constant\ConstantStringType('da-DK'),
                        new \PHPStan\Type\Constant\ConstantStringType('fi-FI'),
                        new \PHPStan\Type\Constant\ConstantStringType('id-ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('ms-MY'),
                        new \PHPStan\Type\Constant\ConstantStringType('nl-NL'),
                        new \PHPStan\Type\Constant\ConstantStringType('no-NO'),
                        new \PHPStan\Type\Constant\ConstantStringType('pl-PL'),
                        new \PHPStan\Type\Constant\ConstantStringType('sv-SE'),
                        new \PHPStan\Type\Constant\ConstantStringType('tl-PH'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function sendChatIntegrationEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InitialContactId'),
                new \PHPStan\Type\Constant\ConstantStringType('NewChatCreated'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function sendOutboundEmail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startAttachedFileUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FileId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('FileStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('UploadUrlMetadata'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectUserArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWSIdentityArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    new \PHPStan\Type\Constant\ConstantStringType('UrlExpiry'),
                    new \PHPStan\Type\Constant\ConstantStringType('HeadersToInclude'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function startChatContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactId'),
                new \PHPStan\Type\Constant\ConstantStringType('ParticipantId'),
                new \PHPStan\Type\Constant\ConstantStringType('ParticipantToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ContinuedFromContactId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startContactEvaluation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationId'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startContactRecording(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startContactStreaming(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamingId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startEmailContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startOutboundChatContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startOutboundEmailContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startOutboundVoiceContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startScreenSharing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startTaskContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startWebRTCContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionData'),
                new \PHPStan\Type\Constant\ConstantStringType('ContactId'),
                new \PHPStan\Type\Constant\ConstantStringType('ParticipantId'),
                new \PHPStan\Type\Constant\ConstantStringType('ParticipantToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attendee'),
                    new \PHPStan\Type\Constant\ConstantStringType('Meeting'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttendeeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('JoinToken'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MediaRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaPlacement'),
                        new \PHPStan\Type\Constant\ConstantStringType('MeetingFeatures'),
                        new \PHPStan\Type\Constant\ConstantStringType('MeetingId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AudioHostUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('AudioFallbackUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('SignalingUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('TurnControlUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('EventIngestionUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EchoReduction'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopContactRecording(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopContactStreaming(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function submitContactEvaluation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationId'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function suspendContactRecording(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function tagContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function transferContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactId'),
                new \PHPStan\Type\Constant\ConstantStringType('ContactArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function untagContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateAgentStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateAuthenticationProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateContactAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateContactEvaluation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationId'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateContactFlowContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateContactFlowMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateContactFlowModuleContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateContactFlowModuleMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateContactFlowName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateContactRoutingData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateContactSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateEmailAddressMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EmailAddressId'),
                new \PHPStan\Type\Constant\ConstantStringType('EmailAddressArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateEvaluationForm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormId'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationFormVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function updateHoursOfOperation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateHoursOfOperationOverride(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateInstanceAttribute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateInstanceStorageConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateParticipantAuthentication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateParticipantRoleConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updatePhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberId'),
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updatePhoneNumberMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updatePredefinedAttribute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updatePrompt(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PromptARN'),
                new \PHPStan\Type\Constant\ConstantStringType('PromptId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateQueueHoursOfOperation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateQueueMaxContacts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateQueueName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateQueueOutboundCallerConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateQueueOutboundEmailConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateQueueStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateQuickConnectConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateQuickConnectName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateRoutingProfileAgentAvailabilityTimer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateRoutingProfileConcurrency(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateRoutingProfileDefaultOutboundQueue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateRoutingProfileName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateRoutingProfileQueues(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateSecurityProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateTaskTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('ContactFlowId'),
                new \PHPStan\Type\Constant\ConstantStringType('SelfAssignFlowId'),
                new \PHPStan\Type\Constant\ConstantStringType('Constraints'),
                new \PHPStan\Type\Constant\ConstantStringType('Defaults'),
                new \PHPStan\Type\Constant\ConstantStringType('Fields'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RequiredFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadOnlyFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvisibleFields'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultFieldValues'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('SingleSelectOptions'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('DESCRIPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED_TIME'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUICK_CONNECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_AREA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATE_TIME'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('SINGLE_SELECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_ASSIGN'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRY_DURATION'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateTrafficDistribution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateUserHierarchy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateUserHierarchyGroupName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateUserHierarchyStructure(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateUserIdentityInfo(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateUserPhoneConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateUserProficiencies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateUserRoutingProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateUserSecurityProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateViewContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('View'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ViewContentSha256'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAVED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InputSchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('Template'),
                        new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateViewMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}