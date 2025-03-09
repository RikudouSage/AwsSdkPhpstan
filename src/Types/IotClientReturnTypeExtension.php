<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class IotClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Iot\IotClient>
     */
    public function getClass(): string
    {
        return \Aws\Iot\IotClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptCertificateTransfer',
            'addThingToBillingGroup',
            'addThingToThingGroup',
            'associateSbomWithPackageVersion',
            'associateTargetsWithJob',
            'attachPolicy',
            'attachPrincipalPolicy',
            'attachSecurityProfile',
            'attachThingPrincipal',
            'cancelAuditMitigationActionsTask',
            'cancelAuditTask',
            'cancelCertificateTransfer',
            'cancelDetectMitigationActionsTask',
            'cancelJob',
            'cancelJobExecution',
            'clearDefaultAuthorizer',
            'confirmTopicRuleDestination',
            'createAuditSuppression',
            'createAuthorizer',
            'createBillingGroup',
            'createCertificateFromCsr',
            'createCertificateProvider',
            'createCommand',
            'createCustomMetric',
            'createDimension',
            'createDomainConfiguration',
            'createDynamicThingGroup',
            'createFleetMetric',
            'createJob',
            'createJobTemplate',
            'createKeysAndCertificate',
            'createMitigationAction',
            'createOTAUpdate',
            'createPackage',
            'createPackageVersion',
            'createPolicy',
            'createPolicyVersion',
            'createProvisioningClaim',
            'createProvisioningTemplate',
            'createProvisioningTemplateVersion',
            'createRoleAlias',
            'createScheduledAudit',
            'createSecurityProfile',
            'createStream',
            'createThing',
            'createThingGroup',
            'createThingType',
            'createTopicRule',
            'createTopicRuleDestination',
            'deleteAccountAuditConfiguration',
            'deleteAuditSuppression',
            'deleteAuthorizer',
            'deleteBillingGroup',
            'deleteCACertificate',
            'deleteCertificate',
            'deleteCertificateProvider',
            'deleteCommand',
            'deleteCommandExecution',
            'deleteCustomMetric',
            'deleteDimension',
            'deleteDomainConfiguration',
            'deleteDynamicThingGroup',
            'deleteFleetMetric',
            'deleteJob',
            'deleteJobExecution',
            'deleteJobTemplate',
            'deleteMitigationAction',
            'deleteOTAUpdate',
            'deletePackage',
            'deletePackageVersion',
            'deletePolicy',
            'deletePolicyVersion',
            'deleteProvisioningTemplate',
            'deleteProvisioningTemplateVersion',
            'deleteRegistrationCode',
            'deleteRoleAlias',
            'deleteScheduledAudit',
            'deleteSecurityProfile',
            'deleteStream',
            'deleteThing',
            'deleteThingGroup',
            'deleteThingType',
            'deleteTopicRule',
            'deleteTopicRuleDestination',
            'deleteV2LoggingLevel',
            'deprecateThingType',
            'describeAccountAuditConfiguration',
            'describeAuditFinding',
            'describeAuditMitigationActionsTask',
            'describeAuditSuppression',
            'describeAuditTask',
            'describeAuthorizer',
            'describeBillingGroup',
            'describeCACertificate',
            'describeCertificate',
            'describeCertificateProvider',
            'describeCustomMetric',
            'describeDefaultAuthorizer',
            'describeDetectMitigationActionsTask',
            'describeDimension',
            'describeDomainConfiguration',
            'describeEndpoint',
            'describeEventConfigurations',
            'describeFleetMetric',
            'describeIndex',
            'describeJob',
            'describeJobExecution',
            'describeJobTemplate',
            'describeManagedJobTemplate',
            'describeMitigationAction',
            'describeProvisioningTemplate',
            'describeProvisioningTemplateVersion',
            'describeRoleAlias',
            'describeScheduledAudit',
            'describeSecurityProfile',
            'describeStream',
            'describeThing',
            'describeThingGroup',
            'describeThingRegistrationTask',
            'describeThingType',
            'detachPolicy',
            'detachPrincipalPolicy',
            'detachSecurityProfile',
            'detachThingPrincipal',
            'disableTopicRule',
            'disassociateSbomFromPackageVersion',
            'enableTopicRule',
            'getBehaviorModelTrainingSummaries',
            'getBucketsAggregation',
            'getCardinality',
            'getCommand',
            'getCommandExecution',
            'getEffectivePolicies',
            'getIndexingConfiguration',
            'getJobDocument',
            'getLoggingOptions',
            'getOTAUpdate',
            'getPackage',
            'getPackageConfiguration',
            'getPackageVersion',
            'getPercentiles',
            'getPolicy',
            'getPolicyVersion',
            'getRegistrationCode',
            'getStatistics',
            'getThingConnectivityData',
            'getTopicRule',
            'getTopicRuleDestination',
            'getV2LoggingOptions',
            'listActiveViolations',
            'listAttachedPolicies',
            'listAuditFindings',
            'listAuditMitigationActionsExecutions',
            'listAuditMitigationActionsTasks',
            'listAuditSuppressions',
            'listAuditTasks',
            'listAuthorizers',
            'listBillingGroups',
            'listCACertificates',
            'listCertificateProviders',
            'listCertificates',
            'listCertificatesByCA',
            'listCommandExecutions',
            'listCommands',
            'listCustomMetrics',
            'listDetectMitigationActionsExecutions',
            'listDetectMitigationActionsTasks',
            'listDimensions',
            'listDomainConfigurations',
            'listFleetMetrics',
            'listIndices',
            'listJobExecutionsForJob',
            'listJobExecutionsForThing',
            'listJobTemplates',
            'listJobs',
            'listManagedJobTemplates',
            'listMetricValues',
            'listMitigationActions',
            'listOTAUpdates',
            'listOutgoingCertificates',
            'listPackageVersions',
            'listPackages',
            'listPolicies',
            'listPolicyPrincipals',
            'listPolicyVersions',
            'listPrincipalPolicies',
            'listPrincipalThings',
            'listPrincipalThingsV2',
            'listProvisioningTemplateVersions',
            'listProvisioningTemplates',
            'listRelatedResourcesForAuditFinding',
            'listRoleAliases',
            'listSbomValidationResults',
            'listScheduledAudits',
            'listSecurityProfiles',
            'listSecurityProfilesForTarget',
            'listStreams',
            'listTagsForResource',
            'listTargetsForPolicy',
            'listTargetsForSecurityProfile',
            'listThingGroups',
            'listThingGroupsForThing',
            'listThingPrincipals',
            'listThingPrincipalsV2',
            'listThingRegistrationTaskReports',
            'listThingRegistrationTasks',
            'listThingTypes',
            'listThings',
            'listThingsInBillingGroup',
            'listThingsInThingGroup',
            'listTopicRuleDestinations',
            'listTopicRules',
            'listV2LoggingLevels',
            'listViolationEvents',
            'putVerificationStateOnViolation',
            'registerCACertificate',
            'registerCertificate',
            'registerCertificateWithoutCA',
            'registerThing',
            'rejectCertificateTransfer',
            'removeThingFromBillingGroup',
            'removeThingFromThingGroup',
            'replaceTopicRule',
            'searchIndex',
            'setDefaultAuthorizer',
            'setDefaultPolicyVersion',
            'setLoggingOptions',
            'setV2LoggingLevel',
            'setV2LoggingOptions',
            'startAuditMitigationActionsTask',
            'startDetectMitigationActionsTask',
            'startOnDemandAuditTask',
            'startThingRegistrationTask',
            'stopThingRegistrationTask',
            'tagResource',
            'testAuthorization',
            'testInvokeAuthorizer',
            'transferCertificate',
            'untagResource',
            'updateAccountAuditConfiguration',
            'updateAuditSuppression',
            'updateAuthorizer',
            'updateBillingGroup',
            'updateCACertificate',
            'updateCertificate',
            'updateCertificateProvider',
            'updateCommand',
            'updateCustomMetric',
            'updateDimension',
            'updateDomainConfiguration',
            'updateDynamicThingGroup',
            'updateEventConfigurations',
            'updateFleetMetric',
            'updateIndexingConfiguration',
            'updateJob',
            'updateMitigationAction',
            'updatePackage',
            'updatePackageConfiguration',
            'updatePackageVersion',
            'updateProvisioningTemplate',
            'updateRoleAlias',
            'updateScheduledAudit',
            'updateSecurityProfile',
            'updateStream',
            'updateThing',
            'updateThingGroup',
            'updateThingGroupsForThing',
            'updateThingType',
            'updateTopicRuleDestination',
            'validateSecurityProfileBehaviors',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptCertificateTransfer' => $this->acceptCertificateTransfer(),
            'addThingToBillingGroup' => $this->addThingToBillingGroup(),
            'addThingToThingGroup' => $this->addThingToThingGroup(),
            'associateSbomWithPackageVersion' => $this->associateSbomWithPackageVersion(),
            'associateTargetsWithJob' => $this->associateTargetsWithJob(),
            'attachPolicy' => $this->attachPolicy(),
            'attachPrincipalPolicy' => $this->attachPrincipalPolicy(),
            'attachSecurityProfile' => $this->attachSecurityProfile(),
            'attachThingPrincipal' => $this->attachThingPrincipal(),
            'cancelAuditMitigationActionsTask' => $this->cancelAuditMitigationActionsTask(),
            'cancelAuditTask' => $this->cancelAuditTask(),
            'cancelCertificateTransfer' => $this->cancelCertificateTransfer(),
            'cancelDetectMitigationActionsTask' => $this->cancelDetectMitigationActionsTask(),
            'cancelJob' => $this->cancelJob(),
            'cancelJobExecution' => $this->cancelJobExecution(),
            'clearDefaultAuthorizer' => $this->clearDefaultAuthorizer(),
            'confirmTopicRuleDestination' => $this->confirmTopicRuleDestination(),
            'createAuditSuppression' => $this->createAuditSuppression(),
            'createAuthorizer' => $this->createAuthorizer(),
            'createBillingGroup' => $this->createBillingGroup(),
            'createCertificateFromCsr' => $this->createCertificateFromCsr(),
            'createCertificateProvider' => $this->createCertificateProvider(),
            'createCommand' => $this->createCommand(),
            'createCustomMetric' => $this->createCustomMetric(),
            'createDimension' => $this->createDimension(),
            'createDomainConfiguration' => $this->createDomainConfiguration(),
            'createDynamicThingGroup' => $this->createDynamicThingGroup(),
            'createFleetMetric' => $this->createFleetMetric(),
            'createJob' => $this->createJob(),
            'createJobTemplate' => $this->createJobTemplate(),
            'createKeysAndCertificate' => $this->createKeysAndCertificate(),
            'createMitigationAction' => $this->createMitigationAction(),
            'createOTAUpdate' => $this->createOTAUpdate(),
            'createPackage' => $this->createPackage(),
            'createPackageVersion' => $this->createPackageVersion(),
            'createPolicy' => $this->createPolicy(),
            'createPolicyVersion' => $this->createPolicyVersion(),
            'createProvisioningClaim' => $this->createProvisioningClaim(),
            'createProvisioningTemplate' => $this->createProvisioningTemplate(),
            'createProvisioningTemplateVersion' => $this->createProvisioningTemplateVersion(),
            'createRoleAlias' => $this->createRoleAlias(),
            'createScheduledAudit' => $this->createScheduledAudit(),
            'createSecurityProfile' => $this->createSecurityProfile(),
            'createStream' => $this->createStream(),
            'createThing' => $this->createThing(),
            'createThingGroup' => $this->createThingGroup(),
            'createThingType' => $this->createThingType(),
            'createTopicRule' => $this->createTopicRule(),
            'createTopicRuleDestination' => $this->createTopicRuleDestination(),
            'deleteAccountAuditConfiguration' => $this->deleteAccountAuditConfiguration(),
            'deleteAuditSuppression' => $this->deleteAuditSuppression(),
            'deleteAuthorizer' => $this->deleteAuthorizer(),
            'deleteBillingGroup' => $this->deleteBillingGroup(),
            'deleteCACertificate' => $this->deleteCACertificate(),
            'deleteCertificate' => $this->deleteCertificate(),
            'deleteCertificateProvider' => $this->deleteCertificateProvider(),
            'deleteCommand' => $this->deleteCommand(),
            'deleteCommandExecution' => $this->deleteCommandExecution(),
            'deleteCustomMetric' => $this->deleteCustomMetric(),
            'deleteDimension' => $this->deleteDimension(),
            'deleteDomainConfiguration' => $this->deleteDomainConfiguration(),
            'deleteDynamicThingGroup' => $this->deleteDynamicThingGroup(),
            'deleteFleetMetric' => $this->deleteFleetMetric(),
            'deleteJob' => $this->deleteJob(),
            'deleteJobExecution' => $this->deleteJobExecution(),
            'deleteJobTemplate' => $this->deleteJobTemplate(),
            'deleteMitigationAction' => $this->deleteMitigationAction(),
            'deleteOTAUpdate' => $this->deleteOTAUpdate(),
            'deletePackage' => $this->deletePackage(),
            'deletePackageVersion' => $this->deletePackageVersion(),
            'deletePolicy' => $this->deletePolicy(),
            'deletePolicyVersion' => $this->deletePolicyVersion(),
            'deleteProvisioningTemplate' => $this->deleteProvisioningTemplate(),
            'deleteProvisioningTemplateVersion' => $this->deleteProvisioningTemplateVersion(),
            'deleteRegistrationCode' => $this->deleteRegistrationCode(),
            'deleteRoleAlias' => $this->deleteRoleAlias(),
            'deleteScheduledAudit' => $this->deleteScheduledAudit(),
            'deleteSecurityProfile' => $this->deleteSecurityProfile(),
            'deleteStream' => $this->deleteStream(),
            'deleteThing' => $this->deleteThing(),
            'deleteThingGroup' => $this->deleteThingGroup(),
            'deleteThingType' => $this->deleteThingType(),
            'deleteTopicRule' => $this->deleteTopicRule(),
            'deleteTopicRuleDestination' => $this->deleteTopicRuleDestination(),
            'deleteV2LoggingLevel' => $this->deleteV2LoggingLevel(),
            'deprecateThingType' => $this->deprecateThingType(),
            'describeAccountAuditConfiguration' => $this->describeAccountAuditConfiguration(),
            'describeAuditFinding' => $this->describeAuditFinding(),
            'describeAuditMitigationActionsTask' => $this->describeAuditMitigationActionsTask(),
            'describeAuditSuppression' => $this->describeAuditSuppression(),
            'describeAuditTask' => $this->describeAuditTask(),
            'describeAuthorizer' => $this->describeAuthorizer(),
            'describeBillingGroup' => $this->describeBillingGroup(),
            'describeCACertificate' => $this->describeCACertificate(),
            'describeCertificate' => $this->describeCertificate(),
            'describeCertificateProvider' => $this->describeCertificateProvider(),
            'describeCustomMetric' => $this->describeCustomMetric(),
            'describeDefaultAuthorizer' => $this->describeDefaultAuthorizer(),
            'describeDetectMitigationActionsTask' => $this->describeDetectMitigationActionsTask(),
            'describeDimension' => $this->describeDimension(),
            'describeDomainConfiguration' => $this->describeDomainConfiguration(),
            'describeEndpoint' => $this->describeEndpoint(),
            'describeEventConfigurations' => $this->describeEventConfigurations(),
            'describeFleetMetric' => $this->describeFleetMetric(),
            'describeIndex' => $this->describeIndex(),
            'describeJob' => $this->describeJob(),
            'describeJobExecution' => $this->describeJobExecution(),
            'describeJobTemplate' => $this->describeJobTemplate(),
            'describeManagedJobTemplate' => $this->describeManagedJobTemplate(),
            'describeMitigationAction' => $this->describeMitigationAction(),
            'describeProvisioningTemplate' => $this->describeProvisioningTemplate(),
            'describeProvisioningTemplateVersion' => $this->describeProvisioningTemplateVersion(),
            'describeRoleAlias' => $this->describeRoleAlias(),
            'describeScheduledAudit' => $this->describeScheduledAudit(),
            'describeSecurityProfile' => $this->describeSecurityProfile(),
            'describeStream' => $this->describeStream(),
            'describeThing' => $this->describeThing(),
            'describeThingGroup' => $this->describeThingGroup(),
            'describeThingRegistrationTask' => $this->describeThingRegistrationTask(),
            'describeThingType' => $this->describeThingType(),
            'detachPolicy' => $this->detachPolicy(),
            'detachPrincipalPolicy' => $this->detachPrincipalPolicy(),
            'detachSecurityProfile' => $this->detachSecurityProfile(),
            'detachThingPrincipal' => $this->detachThingPrincipal(),
            'disableTopicRule' => $this->disableTopicRule(),
            'disassociateSbomFromPackageVersion' => $this->disassociateSbomFromPackageVersion(),
            'enableTopicRule' => $this->enableTopicRule(),
            'getBehaviorModelTrainingSummaries' => $this->getBehaviorModelTrainingSummaries(),
            'getBucketsAggregation' => $this->getBucketsAggregation(),
            'getCardinality' => $this->getCardinality(),
            'getCommand' => $this->getCommand(),
            'getCommandExecution' => $this->getCommandExecution(),
            'getEffectivePolicies' => $this->getEffectivePolicies(),
            'getIndexingConfiguration' => $this->getIndexingConfiguration(),
            'getJobDocument' => $this->getJobDocument(),
            'getLoggingOptions' => $this->getLoggingOptions(),
            'getOTAUpdate' => $this->getOTAUpdate(),
            'getPackage' => $this->getPackage(),
            'getPackageConfiguration' => $this->getPackageConfiguration(),
            'getPackageVersion' => $this->getPackageVersion(),
            'getPercentiles' => $this->getPercentiles(),
            'getPolicy' => $this->getPolicy(),
            'getPolicyVersion' => $this->getPolicyVersion(),
            'getRegistrationCode' => $this->getRegistrationCode(),
            'getStatistics' => $this->getStatistics(),
            'getThingConnectivityData' => $this->getThingConnectivityData(),
            'getTopicRule' => $this->getTopicRule(),
            'getTopicRuleDestination' => $this->getTopicRuleDestination(),
            'getV2LoggingOptions' => $this->getV2LoggingOptions(),
            'listActiveViolations' => $this->listActiveViolations(),
            'listAttachedPolicies' => $this->listAttachedPolicies(),
            'listAuditFindings' => $this->listAuditFindings(),
            'listAuditMitigationActionsExecutions' => $this->listAuditMitigationActionsExecutions(),
            'listAuditMitigationActionsTasks' => $this->listAuditMitigationActionsTasks(),
            'listAuditSuppressions' => $this->listAuditSuppressions(),
            'listAuditTasks' => $this->listAuditTasks(),
            'listAuthorizers' => $this->listAuthorizers(),
            'listBillingGroups' => $this->listBillingGroups(),
            'listCACertificates' => $this->listCACertificates(),
            'listCertificateProviders' => $this->listCertificateProviders(),
            'listCertificates' => $this->listCertificates(),
            'listCertificatesByCA' => $this->listCertificatesByCA(),
            'listCommandExecutions' => $this->listCommandExecutions(),
            'listCommands' => $this->listCommands(),
            'listCustomMetrics' => $this->listCustomMetrics(),
            'listDetectMitigationActionsExecutions' => $this->listDetectMitigationActionsExecutions(),
            'listDetectMitigationActionsTasks' => $this->listDetectMitigationActionsTasks(),
            'listDimensions' => $this->listDimensions(),
            'listDomainConfigurations' => $this->listDomainConfigurations(),
            'listFleetMetrics' => $this->listFleetMetrics(),
            'listIndices' => $this->listIndices(),
            'listJobExecutionsForJob' => $this->listJobExecutionsForJob(),
            'listJobExecutionsForThing' => $this->listJobExecutionsForThing(),
            'listJobTemplates' => $this->listJobTemplates(),
            'listJobs' => $this->listJobs(),
            'listManagedJobTemplates' => $this->listManagedJobTemplates(),
            'listMetricValues' => $this->listMetricValues(),
            'listMitigationActions' => $this->listMitigationActions(),
            'listOTAUpdates' => $this->listOTAUpdates(),
            'listOutgoingCertificates' => $this->listOutgoingCertificates(),
            'listPackageVersions' => $this->listPackageVersions(),
            'listPackages' => $this->listPackages(),
            'listPolicies' => $this->listPolicies(),
            'listPolicyPrincipals' => $this->listPolicyPrincipals(),
            'listPolicyVersions' => $this->listPolicyVersions(),
            'listPrincipalPolicies' => $this->listPrincipalPolicies(),
            'listPrincipalThings' => $this->listPrincipalThings(),
            'listPrincipalThingsV2' => $this->listPrincipalThingsV2(),
            'listProvisioningTemplateVersions' => $this->listProvisioningTemplateVersions(),
            'listProvisioningTemplates' => $this->listProvisioningTemplates(),
            'listRelatedResourcesForAuditFinding' => $this->listRelatedResourcesForAuditFinding(),
            'listRoleAliases' => $this->listRoleAliases(),
            'listSbomValidationResults' => $this->listSbomValidationResults(),
            'listScheduledAudits' => $this->listScheduledAudits(),
            'listSecurityProfiles' => $this->listSecurityProfiles(),
            'listSecurityProfilesForTarget' => $this->listSecurityProfilesForTarget(),
            'listStreams' => $this->listStreams(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTargetsForPolicy' => $this->listTargetsForPolicy(),
            'listTargetsForSecurityProfile' => $this->listTargetsForSecurityProfile(),
            'listThingGroups' => $this->listThingGroups(),
            'listThingGroupsForThing' => $this->listThingGroupsForThing(),
            'listThingPrincipals' => $this->listThingPrincipals(),
            'listThingPrincipalsV2' => $this->listThingPrincipalsV2(),
            'listThingRegistrationTaskReports' => $this->listThingRegistrationTaskReports(),
            'listThingRegistrationTasks' => $this->listThingRegistrationTasks(),
            'listThingTypes' => $this->listThingTypes(),
            'listThings' => $this->listThings(),
            'listThingsInBillingGroup' => $this->listThingsInBillingGroup(),
            'listThingsInThingGroup' => $this->listThingsInThingGroup(),
            'listTopicRuleDestinations' => $this->listTopicRuleDestinations(),
            'listTopicRules' => $this->listTopicRules(),
            'listV2LoggingLevels' => $this->listV2LoggingLevels(),
            'listViolationEvents' => $this->listViolationEvents(),
            'putVerificationStateOnViolation' => $this->putVerificationStateOnViolation(),
            'registerCACertificate' => $this->registerCACertificate(),
            'registerCertificate' => $this->registerCertificate(),
            'registerCertificateWithoutCA' => $this->registerCertificateWithoutCA(),
            'registerThing' => $this->registerThing(),
            'rejectCertificateTransfer' => $this->rejectCertificateTransfer(),
            'removeThingFromBillingGroup' => $this->removeThingFromBillingGroup(),
            'removeThingFromThingGroup' => $this->removeThingFromThingGroup(),
            'replaceTopicRule' => $this->replaceTopicRule(),
            'searchIndex' => $this->searchIndex(),
            'setDefaultAuthorizer' => $this->setDefaultAuthorizer(),
            'setDefaultPolicyVersion' => $this->setDefaultPolicyVersion(),
            'setLoggingOptions' => $this->setLoggingOptions(),
            'setV2LoggingLevel' => $this->setV2LoggingLevel(),
            'setV2LoggingOptions' => $this->setV2LoggingOptions(),
            'startAuditMitigationActionsTask' => $this->startAuditMitigationActionsTask(),
            'startDetectMitigationActionsTask' => $this->startDetectMitigationActionsTask(),
            'startOnDemandAuditTask' => $this->startOnDemandAuditTask(),
            'startThingRegistrationTask' => $this->startThingRegistrationTask(),
            'stopThingRegistrationTask' => $this->stopThingRegistrationTask(),
            'tagResource' => $this->tagResource(),
            'testAuthorization' => $this->testAuthorization(),
            'testInvokeAuthorizer' => $this->testInvokeAuthorizer(),
            'transferCertificate' => $this->transferCertificate(),
            'untagResource' => $this->untagResource(),
            'updateAccountAuditConfiguration' => $this->updateAccountAuditConfiguration(),
            'updateAuditSuppression' => $this->updateAuditSuppression(),
            'updateAuthorizer' => $this->updateAuthorizer(),
            'updateBillingGroup' => $this->updateBillingGroup(),
            'updateCACertificate' => $this->updateCACertificate(),
            'updateCertificate' => $this->updateCertificate(),
            'updateCertificateProvider' => $this->updateCertificateProvider(),
            'updateCommand' => $this->updateCommand(),
            'updateCustomMetric' => $this->updateCustomMetric(),
            'updateDimension' => $this->updateDimension(),
            'updateDomainConfiguration' => $this->updateDomainConfiguration(),
            'updateDynamicThingGroup' => $this->updateDynamicThingGroup(),
            'updateEventConfigurations' => $this->updateEventConfigurations(),
            'updateFleetMetric' => $this->updateFleetMetric(),
            'updateIndexingConfiguration' => $this->updateIndexingConfiguration(),
            'updateJob' => $this->updateJob(),
            'updateMitigationAction' => $this->updateMitigationAction(),
            'updatePackage' => $this->updatePackage(),
            'updatePackageConfiguration' => $this->updatePackageConfiguration(),
            'updatePackageVersion' => $this->updatePackageVersion(),
            'updateProvisioningTemplate' => $this->updateProvisioningTemplate(),
            'updateRoleAlias' => $this->updateRoleAlias(),
            'updateScheduledAudit' => $this->updateScheduledAudit(),
            'updateSecurityProfile' => $this->updateSecurityProfile(),
            'updateStream' => $this->updateStream(),
            'updateThing' => $this->updateThing(),
            'updateThingGroup' => $this->updateThingGroup(),
            'updateThingGroupsForThing' => $this->updateThingGroupsForThing(),
            'updateThingType' => $this->updateThingType(),
            'updateTopicRuleDestination' => $this->updateTopicRuleDestination(),
            'validateSecurityProfileBehaviors' => $this->validateSecurityProfileBehaviors(),
        };
    }
    private function acceptCertificateTransfer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function addThingToBillingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function addThingToThingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateSbomWithPackageVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                new \PHPStan\Type\Constant\ConstantStringType('versionName'),
                new \PHPStan\Type\Constant\ConstantStringType('sbom'),
                new \PHPStan\Type\Constant\ConstantStringType('sbomValidationStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                ]),
            ]),
        ]);
    }
    private function associateTargetsWithJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function attachPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function attachPrincipalPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function attachSecurityProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function attachThingPrincipal(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelAuditMitigationActionsTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelAuditTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelCertificateTransfer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function cancelDetectMitigationActionsTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelJobExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function clearDefaultAuthorizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function confirmTopicRuleDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createAuditSuppression(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createAuthorizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('authorizerName'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizerArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createBillingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('billingGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('billingGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('billingGroupId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCertificateFromCsr(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateId'),
                new \PHPStan\Type\Constant\ConstantStringType('certificatePem'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCertificateProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificateProviderName'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateProviderArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCommand(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commandId'),
                new \PHPStan\Type\Constant\ConstantStringType('commandArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCustomMetric(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('metricName'),
                new \PHPStan\Type\Constant\ConstantStringType('metricArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDimension(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDomainConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainConfigurationName'),
                new \PHPStan\Type\Constant\ConstantStringType('domainConfigurationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDynamicThingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('thingGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('thingGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('thingGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('indexName'),
                new \PHPStan\Type\Constant\ConstantStringType('queryString'),
                new \PHPStan\Type\Constant\ConstantStringType('queryVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFleetMetric(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('metricName'),
                new \PHPStan\Type\Constant\ConstantStringType('metricArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createJobTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobTemplateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('jobTemplateId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createKeysAndCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateId'),
                new \PHPStan\Type\Constant\ConstantStringType('certificatePem'),
                new \PHPStan\Type\Constant\ConstantStringType('keyPair'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrivateKey'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createMitigationAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('actionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createOTAUpdate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('otaUpdateId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsIotJobId'),
                new \PHPStan\Type\Constant\ConstantStringType('otaUpdateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('awsIotJobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('otaUpdateStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function createPackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                new \PHPStan\Type\Constant\ConstantStringType('packageArn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPackageVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packageVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                new \PHPStan\Type\Constant\ConstantStringType('versionName'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('errorReason'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('policyDocument'),
                new \PHPStan\Type\Constant\ConstantStringType('policyVersionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPolicyVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('policyDocument'),
                new \PHPStan\Type\Constant\ConstantStringType('policyVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('isDefaultVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function createProvisioningClaim(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificateId'),
                new \PHPStan\Type\Constant\ConstantStringType('certificatePem'),
                new \PHPStan\Type\Constant\ConstantStringType('keyPair'),
                new \PHPStan\Type\Constant\ConstantStringType('expiration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrivateKey'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createProvisioningTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('templateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultVersionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function createProvisioningTemplateVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('templateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                new \PHPStan\Type\Constant\ConstantStringType('versionId'),
                new \PHPStan\Type\Constant\ConstantStringType('isDefaultVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function createRoleAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('roleAlias'),
                new \PHPStan\Type\Constant\ConstantStringType('roleAliasArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createScheduledAudit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scheduledAuditArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSecurityProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('securityProfileName'),
                new \PHPStan\Type\Constant\ConstantStringType('securityProfileArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('streamId'),
                new \PHPStan\Type\Constant\ConstantStringType('streamArn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('streamVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function createThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('thingName'),
                new \PHPStan\Type\Constant\ConstantStringType('thingArn'),
                new \PHPStan\Type\Constant\ConstantStringType('thingId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createThingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('thingGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('thingGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('thingGroupId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createThingType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('thingTypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('thingTypeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('thingTypeId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTopicRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createTopicRuleDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('topicRuleDestination'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('httpUrlProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('confirmationUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteAccountAuditConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAuditSuppression(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAuthorizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteBillingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteCACertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCertificateProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteCommand(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function deleteCommandExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteCustomMetric(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDimension(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDomainConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDynamicThingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteFleetMetric(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteJobExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteJobTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteMitigationAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteOTAUpdate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePackageVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deletePolicyVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteProvisioningTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteProvisioningTemplateVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRegistrationCode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRoleAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteScheduledAudit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSecurityProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteThingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteThingType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTopicRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteTopicRuleDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteV2LoggingLevel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deprecateThingType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeAccountAuditConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('auditNotificationTargetConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('auditCheckConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\Constant\ConstantStringType('SNS'), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CERT_AGE_THRESHOLD_IN_DAYS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CERT_EXPIRATION_THRESHOLD_IN_DAYS'),
                    ]), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function describeAuditFinding(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('finding'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('findingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('checkName'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('nonCompliantResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('relatedResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('reasonForNonCompliance'),
                    new \PHPStan\Type\Constant\ConstantStringType('reasonForNonComplianceCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('isSuppressed'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE_CERTIFICATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CA_CERTIFICATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IOT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('COGNITO_IDENTITY_POOL'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_SETTINGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLE_ALIAS'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ISSUER_CERTIFICATE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deviceCertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('caCertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cognitoIdentityPoolId'),
                            new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('policyVersionIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('account'),
                            new \PHPStan\Type\Constant\ConstantStringType('iamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleAliasArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceCertificateArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                                new \PHPStan\Type\Constant\ConstantStringType('policyVersionId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateSubject'),
                                new \PHPStan\Type\Constant\ConstantStringType('issuerId'),
                                new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateSerialNumber'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEVICE_CERTIFICATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CA_CERTIFICATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IOT_POLICY'),
                                new \PHPStan\Type\Constant\ConstantStringType('COGNITO_IDENTITY_POOL'),
                                new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_SETTINGS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROLE_ALIAS'),
                                new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ISSUER_CERTIFICATE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('deviceCertificateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('caCertificateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('cognitoIdentityPoolId'),
                                new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                                new \PHPStan\Type\Constant\ConstantStringType('policyVersionIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('account'),
                                new \PHPStan\Type\Constant\ConstantStringType('iamRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleAliasArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('deviceCertificateArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('policyVersionId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateSubject'),
                                    new \PHPStan\Type\Constant\ConstantStringType('issuerId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateSerialNumber'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function describeAuditMitigationActionsTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                new \PHPStan\Type\Constant\ConstantStringType('taskStatistics'),
                new \PHPStan\Type\Constant\ConstantStringType('target'),
                new \PHPStan\Type\Constant\ConstantStringType('auditCheckToActionsMapping'),
                new \PHPStan\Type\Constant\ConstantStringType('actionsDefinition'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('totalFindingsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('failedFindingsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('succeededFindingsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('skippedFindingsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('canceledFindingsCount'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('auditTaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('auditCheckToReasonCodeFilter'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ]))),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ]))),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionParams'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('updateDeviceCertificateParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('updateCACertificateParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('addThingsToThingGroupParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('replaceDefaultPolicyVersionParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('enableIoTLoggingParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('publishFindingToSnsParams'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('thingGroupNames'),
                                new \PHPStan\Type\Constant\ConstantStringType('overrideDynamicGroups'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('BLANK_POLICY'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleArnForLogging'),
                                new \PHPStan\Type\Constant\ConstantStringType('logLevel'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('topicArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeAuditSuppression(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('checkName'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('expirationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('suppressIndefinitely'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('deviceCertificateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('caCertificateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('cognitoIdentityPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyVersionIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('account'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleAliasArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceCertificateArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyVersionId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateSubject'),
                        new \PHPStan\Type\Constant\ConstantStringType('issuerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateSerialNumber'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAuditTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('taskType'),
                new \PHPStan\Type\Constant\ConstantStringType('taskStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('taskStatistics'),
                new \PHPStan\Type\Constant\ConstantStringType('scheduledAuditName'),
                new \PHPStan\Type\Constant\ConstantStringType('auditDetails'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND_AUDIT_TASK'),
                    new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED_AUDIT_TASK'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('totalChecks'),
                    new \PHPStan\Type\Constant\ConstantStringType('inProgressChecks'),
                    new \PHPStan\Type\Constant\ConstantStringType('waitingForDataCollectionChecks'),
                    new \PHPStan\Type\Constant\ConstantStringType('compliantChecks'),
                    new \PHPStan\Type\Constant\ConstantStringType('nonCompliantChecks'),
                    new \PHPStan\Type\Constant\ConstantStringType('failedChecks'),
                    new \PHPStan\Type\Constant\ConstantStringType('canceledChecks'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('checkRunStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('checkCompliant'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalResourcesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('nonCompliantResourcesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('suppressedNonCompliantResourcesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WAITING_FOR_DATA_COLLECTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_COMPLIANT'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_NON_COMPLIANT'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeAuthorizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('authorizerDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('authorizerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorizerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorizerFunctionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tokenKeyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('tokenSigningPublicKeys'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('signingDisabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableCachingForHttp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function describeBillingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('billingGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('billingGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('billingGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('billingGroupProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('billingGroupMetadata'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('billingGroupDescription'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeCACertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificateDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('registrationConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificatePem'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRegistrationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('generationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('validity'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('notBefore'),
                        new \PHPStan\Type\Constant\ConstantStringType('notAfter'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNI_ONLY'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('templateBody'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificateDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('caCertificateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificatePem'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('previousOwnedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('transferData'),
                    new \PHPStan\Type\Constant\ConstantStringType('generationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('validity'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_TRANSFER'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTER_INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACTIVATION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('transferMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('rejectReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('transferDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('acceptDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('rejectDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('notBefore'),
                        new \PHPStan\Type\Constant\ConstantStringType('notAfter'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNI_ONLY'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeCertificateProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificateProviderName'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateProviderArn'),
                new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('accountDefaultForOperations'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreateCertificateFromCsr'),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeCustomMetric(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('metricName'),
                new \PHPStan\Type\Constant\ConstantStringType('metricArn'),
                new \PHPStan\Type\Constant\ConstantStringType('metricType'),
                new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('string-list'),
                    new \PHPStan\Type\Constant\ConstantStringType('ip-address-list'),
                    new \PHPStan\Type\Constant\ConstantStringType('number-list'),
                    new \PHPStan\Type\Constant\ConstantStringType('number'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeDefaultAuthorizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('authorizerDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('authorizerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorizerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorizerFunctionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tokenKeyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('tokenSigningPublicKeys'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('signingDisabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableCachingForHttp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function describeDetectMitigationActionsTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                    new \PHPStan\Type\Constant\ConstantStringType('violationEventOccurrenceRange'),
                    new \PHPStan\Type\Constant\ConstantStringType('onlyActiveViolationsIncluded'),
                    new \PHPStan\Type\Constant\ConstantStringType('suppressedAlertsIncluded'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionsDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskStatistics'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('violationIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityProfileName'),
                        new \PHPStan\Type\Constant\ConstantStringType('behaviorName'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('actionParams'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('updateDeviceCertificateParams'),
                                new \PHPStan\Type\Constant\ConstantStringType('updateCACertificateParams'),
                                new \PHPStan\Type\Constant\ConstantStringType('addThingsToThingGroupParams'),
                                new \PHPStan\Type\Constant\ConstantStringType('replaceDefaultPolicyVersionParams'),
                                new \PHPStan\Type\Constant\ConstantStringType('enableIoTLoggingParams'),
                                new \PHPStan\Type\Constant\ConstantStringType('publishFindingToSnsParams'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATE'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATE'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('thingGroupNames'),
                                    new \PHPStan\Type\Constant\ConstantStringType('overrideDynamicGroups'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('BLANK_POLICY'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('roleArnForLogging'),
                                    new \PHPStan\Type\Constant\ConstantStringType('logLevel'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('topicArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actionsExecuted'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionsSkipped'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionsFailed'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeDimension(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('stringValues'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('TOPIC_FILTER'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeDomainConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainConfigurationName'),
                new \PHPStan\Type\Constant\ConstantStringType('domainConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                new \PHPStan\Type\Constant\ConstantStringType('serverCertificates'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizerConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('domainConfigurationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceType'),
                new \PHPStan\Type\Constant\ConstantStringType('domainType'),
                new \PHPStan\Type\Constant\ConstantStringType('lastStatusChangeDate'),
                new \PHPStan\Type\Constant\ConstantStringType('tlsConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('serverCertificateConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('authenticationType'),
                new \PHPStan\Type\Constant\ConstantStringType('applicationProtocol'),
                new \PHPStan\Type\Constant\ConstantStringType('clientCertificateConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serverCertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('serverCertificateStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('serverCertificateStatusDetail'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('defaultAuthorizerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('allowAuthorizerOverride'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DATA'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREDENTIAL_PROVIDER'),
                    new \PHPStan\Type\Constant\ConstantStringType('JOBS'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENDPOINT'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('securityPolicy'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enableOCSPCheck'),
                    new \PHPStan\Type\Constant\ConstantStringType('ocspLambdaArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ocspAuthorizedResponderArn'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_AUTH_X509'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_AUTH'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_X509'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_SIGV4'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SECURE_MQTT'),
                    new \PHPStan\Type\Constant\ConstantStringType('MQTT_WSS'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clientCertificateCallbackArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('endpointAddress'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEventConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('eventConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('THING'),
                    new \PHPStan\Type\Constant\ConstantStringType('THING_GROUP'),
                    new \PHPStan\Type\Constant\ConstantStringType('THING_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('THING_GROUP_MEMBERSHIP'),
                    new \PHPStan\Type\Constant\ConstantStringType('THING_GROUP_HIERARCHY'),
                    new \PHPStan\Type\Constant\ConstantStringType('THING_TYPE_ASSOCIATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('JOB'),
                    new \PHPStan\Type\Constant\ConstantStringType('JOB_EXECUTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('POLICY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CERTIFICATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CA_CERTIFICATE'),
                ]), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeFleetMetric(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('metricName'),
                new \PHPStan\Type\Constant\ConstantStringType('queryString'),
                new \PHPStan\Type\Constant\ConstantStringType('aggregationType'),
                new \PHPStan\Type\Constant\ConstantStringType('period'),
                new \PHPStan\Type\Constant\ConstantStringType('aggregationField'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('queryVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('indexName'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('metricArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Statistics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Percentiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cardinality'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                    new \PHPStan\Type\Constant\ConstantStringType('Count'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('None'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('indexName'),
                new \PHPStan\Type\Constant\ConstantStringType('indexStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('schema'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('BUILDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REBUILDING'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('documentSource'),
                new \PHPStan\Type\Constant\ConstantStringType('job'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetSelection'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('forceCanceled'),
                    new \PHPStan\Type\Constant\ConstantStringType('reasonCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('comment'),
                    new \PHPStan\Type\Constant\ConstantStringType('targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('presignedUrlConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobExecutionsRolloutConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('abortConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('completedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobProcessDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeoutConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobTemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobExecutionsRetryConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('documentParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('isConcurrent'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedulingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('scheduledJobRollouts'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationPackageVersions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONTINUOUS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('expiresInSec'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('maximumPerMinute'),
                        new \PHPStan\Type\Constant\ConstantStringType('exponentialRate'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('baseRatePerMinute'),
                            new \PHPStan\Type\Constant\ConstantStringType('incrementFactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('rateIncreaseCriteria'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('numberOfNotifiedThings'),
                                new \PHPStan\Type\Constant\ConstantStringType('numberOfSucceededThings'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('criteriaList'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('failureType'),
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                new \PHPStan\Type\Constant\ConstantStringType('thresholdPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('minNumberOfExecutedThings'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('CANCEL'),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('processingTargets'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfCanceledThings'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfSucceededThings'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfFailedThings'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfRejectedThings'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfQueuedThings'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfInProgressThings'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfRemovedThings'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfTimedOutThings'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('inProgressTimeoutInMinutes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('criteriaList'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('failureType'),
                                new \PHPStan\Type\Constant\ConstantStringType('numberOfRetries'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('maintenanceWindows'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STOP_ROLLOUT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCEL'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORCE_CANCEL'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('durationInMinutes'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeJobExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('execution'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('forceCanceled'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('thingArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('queuedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('approximateSecondsBeforeTimedOut'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('detailsMap'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function describeJobTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobTemplateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('jobTemplateId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('documentSource'),
                new \PHPStan\Type\Constant\ConstantStringType('document'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('presignedUrlConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('jobExecutionsRolloutConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('abortConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('timeoutConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('jobExecutionsRetryConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('maintenanceWindows'),
                new \PHPStan\Type\Constant\ConstantStringType('destinationPackageVersions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('expiresInSec'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('maximumPerMinute'),
                    new \PHPStan\Type\Constant\ConstantStringType('exponentialRate'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('baseRatePerMinute'),
                        new \PHPStan\Type\Constant\ConstantStringType('incrementFactor'),
                        new \PHPStan\Type\Constant\ConstantStringType('rateIncreaseCriteria'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfNotifiedThings'),
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfSucceededThings'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('criteriaList'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('failureType'),
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('thresholdPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('minNumberOfExecutedThings'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCEL'),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('inProgressTimeoutInMinutes'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('criteriaList'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('failureType'),
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfRetries'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('durationInMinutes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeManagedJobTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                new \PHPStan\Type\Constant\ConstantStringType('templateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('templateVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('environments'),
                new \PHPStan\Type\Constant\ConstantStringType('documentParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('document'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('regex'),
                        new \PHPStan\Type\Constant\ConstantStringType('example'),
                        new \PHPStan\Type\Constant\ConstantStringType('optional'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMitigationAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                new \PHPStan\Type\Constant\ConstantStringType('actionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('actionParams'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_DEVICE_CERTIFICATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_CA_CERTIFICATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ADD_THINGS_TO_THING_GROUP'),
                    new \PHPStan\Type\Constant\ConstantStringType('REPLACE_DEFAULT_POLICY_VERSION'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IOT_LOGGING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_FINDING_TO_SNS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('updateDeviceCertificateParams'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateCACertificateParams'),
                    new \PHPStan\Type\Constant\ConstantStringType('addThingsToThingGroupParams'),
                    new \PHPStan\Type\Constant\ConstantStringType('replaceDefaultPolicyVersionParams'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableIoTLoggingParams'),
                    new \PHPStan\Type\Constant\ConstantStringType('publishFindingToSnsParams'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('thingGroupNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('overrideDynamicGroups'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('BLANK_POLICY'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('roleArnForLogging'),
                        new \PHPStan\Type\Constant\ConstantStringType('logLevel'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topicArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeProvisioningTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('templateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('templateBody'),
                new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                new \PHPStan\Type\Constant\ConstantStringType('provisioningRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('preProvisioningHook'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('payloadVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FLEET_PROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('JITP'),
                ]),
            ]),
        ]);
    }
    private function describeProvisioningTemplateVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('versionId'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('templateBody'),
                new \PHPStan\Type\Constant\ConstantStringType('isDefaultVersion'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function describeRoleAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('roleAliasDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('roleAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleAliasArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentialDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeScheduledAudit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                new \PHPStan\Type\Constant\ConstantStringType('dayOfMonth'),
                new \PHPStan\Type\Constant\ConstantStringType('dayOfWeek'),
                new \PHPStan\Type\Constant\ConstantStringType('targetCheckNames'),
                new \PHPStan\Type\Constant\ConstantStringType('scheduledAuditName'),
                new \PHPStan\Type\Constant\ConstantStringType('scheduledAuditArn'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                    new \PHPStan\Type\Constant\ConstantStringType('WEEKLY'),
                    new \PHPStan\Type\Constant\ConstantStringType('BIWEEKLY'),
                    new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUN'),
                    new \PHPStan\Type\Constant\ConstantStringType('MON'),
                    new \PHPStan\Type\Constant\ConstantStringType('TUE'),
                    new \PHPStan\Type\Constant\ConstantStringType('WED'),
                    new \PHPStan\Type\Constant\ConstantStringType('THU'),
                    new \PHPStan\Type\Constant\ConstantStringType('FRI'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAT'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSecurityProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('securityProfileName'),
                new \PHPStan\Type\Constant\ConstantStringType('securityProfileArn'),
                new \PHPStan\Type\Constant\ConstantStringType('securityProfileDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('behaviors'),
                new \PHPStan\Type\Constant\ConstantStringType('alertTargets'),
                new \PHPStan\Type\Constant\ConstantStringType('additionalMetricsToRetain'),
                new \PHPStan\Type\Constant\ConstantStringType('additionalMetricsToRetainV2'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('metricsExportConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('metric'),
                        new \PHPStan\Type\Constant\ConstantStringType('metricDimension'),
                        new \PHPStan\Type\Constant\ConstantStringType('criteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('suppressAlerts'),
                        new \PHPStan\Type\Constant\ConstantStringType('exportMetric'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dimensionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('operator'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IN'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_IN'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparisonOperator'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('durationSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('consecutiveDatapointsToAlarm'),
                            new \PHPStan\Type\Constant\ConstantStringType('consecutiveDatapointsToClear'),
                            new \PHPStan\Type\Constant\ConstantStringType('statisticalThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('mlDetectionConfig'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('less-than'),
                                new \PHPStan\Type\Constant\ConstantStringType('less-than-equals'),
                                new \PHPStan\Type\Constant\ConstantStringType('greater-than'),
                                new \PHPStan\Type\Constant\ConstantStringType('greater-than-equals'),
                                new \PHPStan\Type\Constant\ConstantStringType('in-cidr-set'),
                                new \PHPStan\Type\Constant\ConstantStringType('not-in-cidr-set'),
                                new \PHPStan\Type\Constant\ConstantStringType('in-port-set'),
                                new \PHPStan\Type\Constant\ConstantStringType('not-in-port-set'),
                                new \PHPStan\Type\Constant\ConstantStringType('in-set'),
                                new \PHPStan\Type\Constant\ConstantStringType('not-in-set'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('count'),
                                new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                                new \PHPStan\Type\Constant\ConstantStringType('ports'),
                                new \PHPStan\Type\Constant\ConstantStringType('number'),
                                new \PHPStan\Type\Constant\ConstantStringType('numbers'),
                                new \PHPStan\Type\Constant\ConstantStringType('strings'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\FloatType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('statistic'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('confidenceLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\Constant\ConstantStringType('SNS'), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('alertTargetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('metric'),
                        new \PHPStan\Type\Constant\ConstantStringType('metricDimension'),
                        new \PHPStan\Type\Constant\ConstantStringType('exportMetric'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dimensionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('operator'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IN'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_IN'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('mqttTopic'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('streamInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('streamId'),
                    new \PHPStan\Type\Constant\ConstantStringType('streamArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('streamVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('files'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fileId'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('defaultClientId'),
                new \PHPStan\Type\Constant\ConstantStringType('thingName'),
                new \PHPStan\Type\Constant\ConstantStringType('thingId'),
                new \PHPStan\Type\Constant\ConstantStringType('thingArn'),
                new \PHPStan\Type\Constant\ConstantStringType('thingTypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('billingGroupName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeThingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('thingGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('thingGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('thingGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('thingGroupProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('thingGroupMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('indexName'),
                new \PHPStan\Type\Constant\ConstantStringType('queryString'),
                new \PHPStan\Type\Constant\ConstantStringType('queryVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('thingGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributePayload'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('merge'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('parentGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('rootToParentThingGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('BUILDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REBUILDING'),
                ]),
            ]),
        ]);
    }
    private function describeThingRegistrationTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('templateBody'),
                new \PHPStan\Type\Constant\ConstantStringType('inputFileBucket'),
                new \PHPStan\Type\Constant\ConstantStringType('inputFileKey'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
                new \PHPStan\Type\Constant\ConstantStringType('successCount'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCount'),
                new \PHPStan\Type\Constant\ConstantStringType('percentageProgress'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cancelling'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeThingType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('thingTypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('thingTypeId'),
                new \PHPStan\Type\Constant\ConstantStringType('thingTypeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('thingTypeProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('thingTypeMetadata'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('thingTypeDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('searchableAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('mqtt5Configuration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('propagatingAttributes'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('userPropertyKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('thingAttribute'),
                                new \PHPStan\Type\Constant\ConstantStringType('connectionAttribute'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('deprecated'),
                    new \PHPStan\Type\Constant\ConstantStringType('deprecationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function detachPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function detachPrincipalPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function detachSecurityProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function detachThingPrincipal(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disableTopicRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateSbomFromPackageVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function enableTopicRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getBehaviorModelTrainingSummaries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityProfileName'),
                        new \PHPStan\Type\Constant\ConstantStringType('behaviorName'),
                        new \PHPStan\Type\Constant\ConstantStringType('trainingDataCollectionStartDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('datapointsCollectionPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModelRefreshDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_BUILD'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBucketsAggregation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('totalCount'),
                new \PHPStan\Type\Constant\ConstantStringType('buckets'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('keyValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getCardinality(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cardinality'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getCommand(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commandId'),
                new \PHPStan\Type\Constant\ConstantStringType('commandArn'),
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('mandatoryParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('payload'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('deprecated'),
                new \PHPStan\Type\Constant\ConstantStringType('pendingDeletion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWS-IoT'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS-IoT-FleetWise'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                            new \PHPStan\Type\Constant\ConstantStringType('I'),
                            new \PHPStan\Type\Constant\ConstantStringType('L'),
                            new \PHPStan\Type\Constant\ConstantStringType('D'),
                            new \PHPStan\Type\Constant\ConstantStringType('BIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('UL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                            new \PHPStan\Type\Constant\ConstantStringType('I'),
                            new \PHPStan\Type\Constant\ConstantStringType('L'),
                            new \PHPStan\Type\Constant\ConstantStringType('D'),
                            new \PHPStan\Type\Constant\ConstantStringType('BIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('UL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getCommandExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('executionId'),
                new \PHPStan\Type\Constant\ConstantStringType('commandArn'),
                new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('result'),
                new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('executionTimeoutSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('completedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('timeToLive'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('reasonCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('reasonDescription'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S'),
                    new \PHPStan\Type\Constant\ConstantStringType('B'),
                    new \PHPStan\Type\Constant\ConstantStringType('BIN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S'),
                    new \PHPStan\Type\Constant\ConstantStringType('B'),
                    new \PHPStan\Type\Constant\ConstantStringType('I'),
                    new \PHPStan\Type\Constant\ConstantStringType('L'),
                    new \PHPStan\Type\Constant\ConstantStringType('D'),
                    new \PHPStan\Type\Constant\ConstantStringType('BIN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UL'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getEffectivePolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('effectivePolicies'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyDocument'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getIndexingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('thingIndexingConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('thingGroupIndexingConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('thingIndexingMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('thingConnectivityIndexingMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceDefenderIndexingMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('namedShadowIndexingMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('managedFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('customFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('filter'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRY'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRY_AND_SHADOW'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        new \PHPStan\Type\Constant\ConstantStringType('STATUS'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        new \PHPStan\Type\Constant\ConstantStringType('VIOLATIONS'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        new \PHPStan\Type\Constant\ConstantStringType('ON'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('namedShadowNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('geoLocations'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('order'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LatLon'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LonLat'),
                                ]),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('thingGroupIndexingMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('managedFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('customFields'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        new \PHPStan\Type\Constant\ConstantStringType('ON'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getJobDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('document'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getLoggingOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('logLevel'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
            ]),
        ]);
    }
    private function getOTAUpdate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('otaUpdateInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('otaUpdateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('otaUpdateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('protocols'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsJobExecutionsRolloutConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsJobPresignedUrlConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetSelection'),
                    new \PHPStan\Type\Constant\ConstantStringType('otaUpdateFiles'),
                    new \PHPStan\Type\Constant\ConstantStringType('otaUpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsIotJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsIotJobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('additionalParameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MQTT'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('maximumPerMinute'),
                        new \PHPStan\Type\Constant\ConstantStringType('exponentialRate'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('baseRatePerMinute'),
                            new \PHPStan\Type\Constant\ConstantStringType('incrementFactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('rateIncreaseCriteria'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('numberOfNotifiedThings'),
                                new \PHPStan\Type\Constant\ConstantStringType('numberOfSucceededThings'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('expiresInSec'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONTINUOUS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fileName'),
                            new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                            new \PHPStan\Type\Constant\ConstantStringType('fileVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('fileLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('codeSigning'),
                            new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('stream'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('streamId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fileId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('awsSignerJobId'),
                                new \PHPStan\Type\Constant\ConstantStringType('startSigningJobParameter'),
                                new \PHPStan\Type\Constant\ConstantStringType('customCodeSigning'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('signingProfileParameter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('signingProfileName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('destination'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('platform'),
                                        new \PHPStan\Type\Constant\ConstantStringType('certificatePathOnDevice'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('signature'),
                                    new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                    new \PHPStan\Type\Constant\ConstantStringType('hashAlgorithm'),
                                    new \PHPStan\Type\Constant\ConstantStringType('signatureAlgorithm'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('inlineDocument'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ResourceType(),
                                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('certificateName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('inlineDocument'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getPackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                new \PHPStan\Type\Constant\ConstantStringType('packageArn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultVersionName'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getPackageConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('versionUpdateByJobsConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getPackageVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packageVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                new \PHPStan\Type\Constant\ConstantStringType('versionName'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                new \PHPStan\Type\Constant\ConstantStringType('artifact'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('errorReason'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('sbom'),
                new \PHPStan\Type\Constant\ConstantStringType('sbomValidationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('recipe'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPercentiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('percentiles'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('percent'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('policyDocument'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('generationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPolicyVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                new \PHPStan\Type\Constant\ConstantStringType('policyDocument'),
                new \PHPStan\Type\Constant\ConstantStringType('policyVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('isDefaultVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('generationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRegistrationCode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registrationCode'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statistics'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('count'),
                    new \PHPStan\Type\Constant\ConstantStringType('average'),
                    new \PHPStan\Type\Constant\ConstantStringType('sum'),
                    new \PHPStan\Type\Constant\ConstantStringType('minimum'),
                    new \PHPStan\Type\Constant\ConstantStringType('maximum'),
                    new \PHPStan\Type\Constant\ConstantStringType('sumOfSquares'),
                    new \PHPStan\Type\Constant\ConstantStringType('variance'),
                    new \PHPStan\Type\Constant\ConstantStringType('stdDeviation'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function getThingConnectivityData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('thingName'),
                new \PHPStan\Type\Constant\ConstantStringType('connected'),
                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('disconnectReason'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AUTH_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('CLIENT_INITIATED_DISCONNECT'),
                    new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONNECTION_LOST'),
                    new \PHPStan\Type\Constant\ConstantStringType('DUPLICATE_CLIENTID'),
                    new \PHPStan\Type\Constant\ConstantStringType('FORBIDDEN_ACCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('MQTT_KEEP_ALIVE_TIMEOUT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SERVER_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('SERVER_INITIATED_DISCONNECT'),
                    new \PHPStan\Type\Constant\ConstantStringType('THROTTLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('WEBSOCKET_TTL_EXPIRATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMAUTH_TTL_EXPIRATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
            ]),
        ]);
    }
    private function getTopicRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ruleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('rule'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('sql'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleDisabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsIotSqlVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorAction'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dynamoDB'),
                            new \PHPStan\Type\Constant\ConstantStringType('dynamoDBv2'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                            new \PHPStan\Type\Constant\ConstantStringType('sns'),
                            new \PHPStan\Type\Constant\ConstantStringType('sqs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis'),
                            new \PHPStan\Type\Constant\ConstantStringType('republish'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            new \PHPStan\Type\Constant\ConstantStringType('firehose'),
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatchMetric'),
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatchAlarm'),
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatchLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('salesforce'),
                            new \PHPStan\Type\Constant\ConstantStringType('iotAnalytics'),
                            new \PHPStan\Type\Constant\ConstantStringType('iotEvents'),
                            new \PHPStan\Type\Constant\ConstantStringType('iotSiteWise'),
                            new \PHPStan\Type\Constant\ConstantStringType('stepFunctions'),
                            new \PHPStan\Type\Constant\ConstantStringType('timestream'),
                            new \PHPStan\Type\Constant\ConstantStringType('http'),
                            new \PHPStan\Type\Constant\ConstantStringType('kafka'),
                            new \PHPStan\Type\Constant\ConstantStringType('openSearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                new \PHPStan\Type\Constant\ConstantStringType('hashKeyField'),
                                new \PHPStan\Type\Constant\ConstantStringType('hashKeyValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('hashKeyType'),
                                new \PHPStan\Type\Constant\ConstantStringType('rangeKeyField'),
                                new \PHPStan\Type\Constant\ConstantStringType('rangeKeyValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('rangeKeyType'),
                                new \PHPStan\Type\Constant\ConstantStringType('payloadField'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('putItem'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('functionArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('messageFormat'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RAW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('queueUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('useBase64'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                                new \PHPStan\Type\Constant\ConstantStringType('partitionKey'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('topic'),
                                new \PHPStan\Type\Constant\ConstantStringType('qos'),
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('payloadFormatIndicator'),
                                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('responseTopic'),
                                    new \PHPStan\Type\Constant\ConstantStringType('correlationData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('messageExpiry'),
                                    new \PHPStan\Type\Constant\ConstantStringType('userProperties'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
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
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('cannedAcl'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('private'),
                                    new \PHPStan\Type\Constant\ConstantStringType('public-read'),
                                    new \PHPStan\Type\Constant\ConstantStringType('public-read-write'),
                                    new \PHPStan\Type\Constant\ConstantStringType('aws-exec-read'),
                                    new \PHPStan\Type\Constant\ConstantStringType('authenticated-read'),
                                    new \PHPStan\Type\Constant\ConstantStringType('bucket-owner-read'),
                                    new \PHPStan\Type\Constant\ConstantStringType('bucket-owner-full-control'),
                                    new \PHPStan\Type\Constant\ConstantStringType('log-delivery-write'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('deliveryStreamName'),
                                new \PHPStan\Type\Constant\ConstantStringType('separator'),
                                new \PHPStan\Type\Constant\ConstantStringType('batchMode'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('metricNamespace'),
                                new \PHPStan\Type\Constant\ConstantStringType('metricName'),
                                new \PHPStan\Type\Constant\ConstantStringType('metricValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('metricUnit'),
                                new \PHPStan\Type\Constant\ConstantStringType('metricTimestamp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('alarmName'),
                                new \PHPStan\Type\Constant\ConstantStringType('stateReason'),
                                new \PHPStan\Type\Constant\ConstantStringType('stateValue'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('logGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('batchMode'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('index'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('token'),
                                new \PHPStan\Type\Constant\ConstantStringType('url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('channelArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('channelName'),
                                new \PHPStan\Type\Constant\ConstantStringType('batchMode'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('inputName'),
                                new \PHPStan\Type\Constant\ConstantStringType('messageId'),
                                new \PHPStan\Type\Constant\ConstantStringType('batchMode'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('putAssetPropertyValueEntries'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('propertyAlias'),
                                        new \PHPStan\Type\Constant\ConstantStringType('propertyValues'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                                new \PHPStan\Type\Constant\ConstantStringType('quality'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('timeInSeconds'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('offsetInNanos'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('executionNamePrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('stateMachineName'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                                new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('url'),
                                new \PHPStan\Type\Constant\ConstantStringType('confirmationUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('auth'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('sigv4'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('signingRegion'),
                                        new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('destinationArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('topic'),
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('partition'),
                                new \PHPStan\Type\Constant\ConstantStringType('clientProperties'),
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
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
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('index'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('trackerName'),
                                new \PHPStan\Type\Constant\ConstantStringType('deviceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                new \PHPStan\Type\Constant\ConstantStringType('latitude'),
                                new \PHPStan\Type\Constant\ConstantStringType('longitude'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dynamoDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamoDBv2'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('sns'),
                        new \PHPStan\Type\Constant\ConstantStringType('sqs'),
                        new \PHPStan\Type\Constant\ConstantStringType('kinesis'),
                        new \PHPStan\Type\Constant\ConstantStringType('republish'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3'),
                        new \PHPStan\Type\Constant\ConstantStringType('firehose'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudwatchMetric'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudwatchAlarm'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudwatchLogs'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('iotAnalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('iotEvents'),
                        new \PHPStan\Type\Constant\ConstantStringType('iotSiteWise'),
                        new \PHPStan\Type\Constant\ConstantStringType('stepFunctions'),
                        new \PHPStan\Type\Constant\ConstantStringType('timestream'),
                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                        new \PHPStan\Type\Constant\ConstantStringType('kafka'),
                        new \PHPStan\Type\Constant\ConstantStringType('openSearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('operation'),
                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyField'),
                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyField'),
                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('payloadField'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('putItem'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('functionArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('messageFormat'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RAW'),
                                new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('queueUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('useBase64'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                            new \PHPStan\Type\Constant\ConstantStringType('partitionKey'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('topic'),
                            new \PHPStan\Type\Constant\ConstantStringType('qos'),
                            new \PHPStan\Type\Constant\ConstantStringType('headers'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('payloadFormatIndicator'),
                                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                                new \PHPStan\Type\Constant\ConstantStringType('responseTopic'),
                                new \PHPStan\Type\Constant\ConstantStringType('correlationData'),
                                new \PHPStan\Type\Constant\ConstantStringType('messageExpiry'),
                                new \PHPStan\Type\Constant\ConstantStringType('userProperties'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
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
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('cannedAcl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('private'),
                                new \PHPStan\Type\Constant\ConstantStringType('public-read'),
                                new \PHPStan\Type\Constant\ConstantStringType('public-read-write'),
                                new \PHPStan\Type\Constant\ConstantStringType('aws-exec-read'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticated-read'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucket-owner-read'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucket-owner-full-control'),
                                new \PHPStan\Type\Constant\ConstantStringType('log-delivery-write'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('deliveryStreamName'),
                            new \PHPStan\Type\Constant\ConstantStringType('separator'),
                            new \PHPStan\Type\Constant\ConstantStringType('batchMode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('metricNamespace'),
                            new \PHPStan\Type\Constant\ConstantStringType('metricName'),
                            new \PHPStan\Type\Constant\ConstantStringType('metricValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('metricUnit'),
                            new \PHPStan\Type\Constant\ConstantStringType('metricTimestamp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('alarmName'),
                            new \PHPStan\Type\Constant\ConstantStringType('stateReason'),
                            new \PHPStan\Type\Constant\ConstantStringType('stateValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('logGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('batchMode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('index'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('token'),
                            new \PHPStan\Type\Constant\ConstantStringType('url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('channelArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('channelName'),
                            new \PHPStan\Type\Constant\ConstantStringType('batchMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('inputName'),
                            new \PHPStan\Type\Constant\ConstantStringType('messageId'),
                            new \PHPStan\Type\Constant\ConstantStringType('batchMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('putAssetPropertyValueEntries'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyAlias'),
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                            new \PHPStan\Type\Constant\ConstantStringType('quality'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('timeInSeconds'),
                                                new \PHPStan\Type\Constant\ConstantStringType('offsetInNanos'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('executionNamePrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('stateMachineName'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                            new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('url'),
                            new \PHPStan\Type\Constant\ConstantStringType('confirmationUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('headers'),
                            new \PHPStan\Type\Constant\ConstantStringType('auth'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sigv4'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('signingRegion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('destinationArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('topic'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('partition'),
                            new \PHPStan\Type\Constant\ConstantStringType('clientProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('headers'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
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
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('index'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('trackerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('latitude'),
                            new \PHPStan\Type\Constant\ConstantStringType('longitude'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getTopicRuleDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('topicRuleDestination'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('httpUrlProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('confirmationUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getV2LoggingOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultLogLevel'),
                new \PHPStan\Type\Constant\ConstantStringType('disableAllLogs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function listActiveViolations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('activeViolations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('violationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingName'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityProfileName'),
                        new \PHPStan\Type\Constant\ConstantStringType('behavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastViolationValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('violationEventAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('verificationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('verificationStateDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastViolationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('violationStartTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('metric'),
                            new \PHPStan\Type\Constant\ConstantStringType('metricDimension'),
                            new \PHPStan\Type\Constant\ConstantStringType('criteria'),
                            new \PHPStan\Type\Constant\ConstantStringType('suppressAlerts'),
                            new \PHPStan\Type\Constant\ConstantStringType('exportMetric'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dimensionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('operator'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_IN'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('comparisonOperator'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('durationSeconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('consecutiveDatapointsToAlarm'),
                                new \PHPStan\Type\Constant\ConstantStringType('consecutiveDatapointsToClear'),
                                new \PHPStan\Type\Constant\ConstantStringType('statisticalThreshold'),
                                new \PHPStan\Type\Constant\ConstantStringType('mlDetectionConfig'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('less-than'),
                                    new \PHPStan\Type\Constant\ConstantStringType('less-than-equals'),
                                    new \PHPStan\Type\Constant\ConstantStringType('greater-than'),
                                    new \PHPStan\Type\Constant\ConstantStringType('greater-than-equals'),
                                    new \PHPStan\Type\Constant\ConstantStringType('in-cidr-set'),
                                    new \PHPStan\Type\Constant\ConstantStringType('not-in-cidr-set'),
                                    new \PHPStan\Type\Constant\ConstantStringType('in-port-set'),
                                    new \PHPStan\Type\Constant\ConstantStringType('not-in-port-set'),
                                    new \PHPStan\Type\Constant\ConstantStringType('in-set'),
                                    new \PHPStan\Type\Constant\ConstantStringType('not-in-set'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('count'),
                                    new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ports'),
                                    new \PHPStan\Type\Constant\ConstantStringType('number'),
                                    new \PHPStan\Type\Constant\ConstantStringType('numbers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('strings'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\IntegerType(),
                                    ])),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\FloatType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('statistic'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('confidenceLevel'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                            new \PHPStan\Type\Constant\ConstantStringType('ports'),
                            new \PHPStan\Type\Constant\ConstantStringType('number'),
                            new \PHPStan\Type\Constant\ConstantStringType('numbers'),
                            new \PHPStan\Type\Constant\ConstantStringType('strings'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\FloatType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('confidenceLevel'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FALSE_POSITIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BENIGN_POSITIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRUE_POSITIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAttachedPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policies'),
                new \PHPStan\Type\Constant\ConstantStringType('nextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAuditFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('findings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('findingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                        new \PHPStan\Type\Constant\ConstantStringType('checkName'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('findingTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('nonCompliantResource'),
                        new \PHPStan\Type\Constant\ConstantStringType('relatedResources'),
                        new \PHPStan\Type\Constant\ConstantStringType('reasonForNonCompliance'),
                        new \PHPStan\Type\Constant\ConstantStringType('reasonForNonComplianceCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('isSuppressed'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEVICE_CERTIFICATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CA_CERTIFICATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IOT_POLICY'),
                                new \PHPStan\Type\Constant\ConstantStringType('COGNITO_IDENTITY_POOL'),
                                new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_SETTINGS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROLE_ALIAS'),
                                new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ISSUER_CERTIFICATE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('deviceCertificateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('caCertificateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('cognitoIdentityPoolId'),
                                new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                                new \PHPStan\Type\Constant\ConstantStringType('policyVersionIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('account'),
                                new \PHPStan\Type\Constant\ConstantStringType('iamRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleAliasArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('deviceCertificateArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('policyVersionId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateSubject'),
                                    new \PHPStan\Type\Constant\ConstantStringType('issuerId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateSerialNumber'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('resourceIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_CERTIFICATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CA_CERTIFICATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IOT_POLICY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COGNITO_IDENTITY_POOL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_SETTINGS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROLE_ALIAS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ISSUER_CERTIFICATE'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('deviceCertificateId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('caCertificateId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('cognitoIdentityPoolId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('policyVersionIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('account'),
                                    new \PHPStan\Type\Constant\ConstantStringType('iamRoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('roleAliasArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('deviceCertificateArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('policyVersionId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateSubject'),
                                        new \PHPStan\Type\Constant\ConstantStringType('issuerId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateSerialNumber'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAuditMitigationActionsExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionsExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                        new \PHPStan\Type\Constant\ConstantStringType('findingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAuditMitigationActionsTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tasks'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAuditSuppressions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('suppressions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('checkName'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('expirationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('suppressIndefinitely'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deviceCertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('caCertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cognitoIdentityPoolId'),
                            new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('policyVersionIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('account'),
                            new \PHPStan\Type\Constant\ConstantStringType('iamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleAliasArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceCertificateArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                                new \PHPStan\Type\Constant\ConstantStringType('policyVersionId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateSubject'),
                                new \PHPStan\Type\Constant\ConstantStringType('issuerId'),
                                new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateSerialNumber'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAuditTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tasks'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND_AUDIT_TASK'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED_AUDIT_TASK'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAuthorizers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('authorizers'),
                new \PHPStan\Type\Constant\ConstantStringType('nextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authorizerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('authorizerArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBillingGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('billingGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCACertificates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificates'),
                new \PHPStan\Type\Constant\ConstantStringType('nextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCertificateProviders(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificateProviders'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('certificateProviderName'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateProviderArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCertificates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificates'),
                new \PHPStan\Type\Constant\ConstantStringType('nextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_TRANSFER'),
                            new \PHPStan\Type\Constant\ConstantStringType('REGISTER_INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACTIVATION'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNI_ONLY'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCertificatesByCA(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificates'),
                new \PHPStan\Type\Constant\ConstantStringType('nextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_TRANSFER'),
                            new \PHPStan\Type\Constant\ConstantStringType('REGISTER_INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACTIVATION'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNI_ONLY'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCommandExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commandExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('commandArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('completedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCommands(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commands'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('commandArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('commandId'),
                        new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deprecated'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('pendingDeletion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCustomMetrics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('metricNames'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDetectMitigationActionsExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionsExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                        new \PHPStan\Type\Constant\ConstantStringType('violationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingName'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionStartDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionEndDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDetectMitigationActionsTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tasks'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskEndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('target'),
                        new \PHPStan\Type\Constant\ConstantStringType('violationEventOccurrenceRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('onlyActiveViolationsIncluded'),
                        new \PHPStan\Type\Constant\ConstantStringType('suppressedAlertsIncluded'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionsDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskStatistics'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('violationIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityProfileName'),
                            new \PHPStan\Type\Constant\ConstantStringType('behaviorName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('actionParams'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('updateDeviceCertificateParams'),
                                    new \PHPStan\Type\Constant\ConstantStringType('updateCACertificateParams'),
                                    new \PHPStan\Type\Constant\ConstantStringType('addThingsToThingGroupParams'),
                                    new \PHPStan\Type\Constant\ConstantStringType('replaceDefaultPolicyVersionParams'),
                                    new \PHPStan\Type\Constant\ConstantStringType('enableIoTLoggingParams'),
                                    new \PHPStan\Type\Constant\ConstantStringType('publishFindingToSnsParams'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATE'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATE'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('thingGroupNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideDynamicGroups'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('BLANK_POLICY'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('roleArnForLogging'),
                                        new \PHPStan\Type\Constant\ConstantStringType('logLevel'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('topicArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('actionsExecuted'),
                            new \PHPStan\Type\Constant\ConstantStringType('actionsSkipped'),
                            new \PHPStan\Type\Constant\ConstantStringType('actionsFailed'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDimensions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dimensionNames'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDomainConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('domainConfigurationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('domainConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREDENTIAL_PROVIDER'),
                            new \PHPStan\Type\Constant\ConstantStringType('JOBS'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFleetMetrics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('fleetMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('metricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('metricArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\Constant\ConstantStringType('indexNames'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listJobExecutionsForJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('executionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('thingArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobExecutionSummary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('queuedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('retryAttempt'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listJobExecutionsForThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('executionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobExecutionSummary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('queuedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('retryAttempt'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listJobTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('jobTemplateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobTemplateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobs'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetSelection'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('completedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('isConcurrent'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUOUS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETION_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listManagedJobTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('managedJobTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('templateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('environments'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMetricValues(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('metricDatumList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                            new \PHPStan\Type\Constant\ConstantStringType('ports'),
                            new \PHPStan\Type\Constant\ConstantStringType('number'),
                            new \PHPStan\Type\Constant\ConstantStringType('numbers'),
                            new \PHPStan\Type\Constant\ConstantStringType('strings'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\FloatType(),
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
    private function listMitigationActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionIdentifiers'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOTAUpdates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('otaUpdates'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('otaUpdateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('otaUpdateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOutgoingCertificates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('outgoingCertificates'),
                new \PHPStan\Type\Constant\ConstantStringType('nextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('transferredTo'),
                        new \PHPStan\Type\Constant\ConstantStringType('transferDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('transferMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPackageVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packageVersionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                        new \PHPStan\Type\Constant\ConstantStringType('versionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPackages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packageSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultVersionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                    ], [
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
    private function listPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policies'),
                new \PHPStan\Type\Constant\ConstantStringType('nextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPolicyPrincipals(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('principals'),
                new \PHPStan\Type\Constant\ConstantStringType('nextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPolicyVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyVersions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('versionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('isDefaultVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('createDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listPrincipalPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policies'),
                new \PHPStan\Type\Constant\ConstantStringType('nextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPrincipalThings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('things'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPrincipalThingsV2(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('principalThingObjects'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('thingName'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingPrincipalType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE_THING'),
                            new \PHPStan\Type\Constant\ConstantStringType('NON_EXCLUSIVE_THING'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProvisioningTemplateVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('versions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('versionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('isDefaultVersion'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProvisioningTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('templates'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('templateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_PROVISIONING'),
                            new \PHPStan\Type\Constant\ConstantStringType('JITP'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRelatedResourcesForAuditFinding(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('relatedResources'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE_CERTIFICATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CA_CERTIFICATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IOT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('COGNITO_IDENTITY_POOL'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_SETTINGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLE_ALIAS'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ISSUER_CERTIFICATE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deviceCertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('caCertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cognitoIdentityPoolId'),
                            new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('policyVersionIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('account'),
                            new \PHPStan\Type\Constant\ConstantStringType('iamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleAliasArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceCertificateArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                                new \PHPStan\Type\Constant\ConstantStringType('policyVersionId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateSubject'),
                                new \PHPStan\Type\Constant\ConstantStringType('issuerId'),
                                new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateSerialNumber'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRoleAliases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('roleAliases'),
                new \PHPStan\Type\Constant\ConstantStringType('nextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSbomValidationResults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('validationResultSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fileName'),
                        new \PHPStan\Type\Constant\ConstantStringType('validationResult'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORMAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('FILE_SIZE_LIMIT_EXCEEDED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listScheduledAudits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scheduledAudits'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('scheduledAuditName'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduledAuditArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                        new \PHPStan\Type\Constant\ConstantStringType('dayOfMonth'),
                        new \PHPStan\Type\Constant\ConstantStringType('dayOfWeek'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEEKLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BIWEEKLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUN'),
                            new \PHPStan\Type\Constant\ConstantStringType('MON'),
                            new \PHPStan\Type\Constant\ConstantStringType('TUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WED'),
                            new \PHPStan\Type\Constant\ConstantStringType('THU'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRI'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAT'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSecurityProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('securityProfileIdentifiers'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSecurityProfilesForTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('securityProfileTargetMappings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityProfileIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('target'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStreams(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('streams'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('streamId'),
                        new \PHPStan\Type\Constant\ConstantStringType('streamArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('streamVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
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
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTargetsForPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('targets'),
                new \PHPStan\Type\Constant\ConstantStringType('nextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTargetsForSecurityProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('securityProfileTargets'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listThingGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('thingGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listThingGroupsForThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('thingGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listThingPrincipals(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('principals'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listThingPrincipalsV2(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('thingPrincipalObjects'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('principal'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingPrincipalType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE_THING'),
                            new \PHPStan\Type\Constant\ConstantStringType('NON_EXCLUSIVE_THING'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listThingRegistrationTaskReports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourceLinks'),
                new \PHPStan\Type\Constant\ConstantStringType('reportType'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ERRORS'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESULTS'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listThingRegistrationTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskIds'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listThingTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('thingTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('thingTypeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingTypeArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingTypeProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingTypeMetadata'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('thingTypeDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('searchableAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('mqtt5Configuration'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('propagatingAttributes'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('userPropertyKey'),
                                        new \PHPStan\Type\Constant\ConstantStringType('thingAttribute'),
                                        new \PHPStan\Type\Constant\ConstantStringType('connectionAttribute'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deprecated'),
                            new \PHPStan\Type\Constant\ConstantStringType('deprecationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listThings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('things'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('thingName'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingTypeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listThingsInBillingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('things'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listThingsInThingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('things'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTopicRuleDestinations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('destinationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpUrlSummary'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcDestinationSummary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('confirmationUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTopicRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('rules'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ruleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('topicPattern'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleDisabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listV2LoggingLevels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('logTargetConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('logTarget'),
                        new \PHPStan\Type\Constant\ConstantStringType('logLevel'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('THING_GROUP'),
                                new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('SOURCE_IP'),
                                new \PHPStan\Type\Constant\ConstantStringType('PRINCIPAL_ID'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listViolationEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('violationEvents'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('violationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingName'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityProfileName'),
                        new \PHPStan\Type\Constant\ConstantStringType('behavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('metricValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('violationEventAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('violationEventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('verificationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('verificationStateDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('violationEventTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('metric'),
                            new \PHPStan\Type\Constant\ConstantStringType('metricDimension'),
                            new \PHPStan\Type\Constant\ConstantStringType('criteria'),
                            new \PHPStan\Type\Constant\ConstantStringType('suppressAlerts'),
                            new \PHPStan\Type\Constant\ConstantStringType('exportMetric'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dimensionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('operator'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_IN'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('comparisonOperator'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('durationSeconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('consecutiveDatapointsToAlarm'),
                                new \PHPStan\Type\Constant\ConstantStringType('consecutiveDatapointsToClear'),
                                new \PHPStan\Type\Constant\ConstantStringType('statisticalThreshold'),
                                new \PHPStan\Type\Constant\ConstantStringType('mlDetectionConfig'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('less-than'),
                                    new \PHPStan\Type\Constant\ConstantStringType('less-than-equals'),
                                    new \PHPStan\Type\Constant\ConstantStringType('greater-than'),
                                    new \PHPStan\Type\Constant\ConstantStringType('greater-than-equals'),
                                    new \PHPStan\Type\Constant\ConstantStringType('in-cidr-set'),
                                    new \PHPStan\Type\Constant\ConstantStringType('not-in-cidr-set'),
                                    new \PHPStan\Type\Constant\ConstantStringType('in-port-set'),
                                    new \PHPStan\Type\Constant\ConstantStringType('not-in-port-set'),
                                    new \PHPStan\Type\Constant\ConstantStringType('in-set'),
                                    new \PHPStan\Type\Constant\ConstantStringType('not-in-set'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('count'),
                                    new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ports'),
                                    new \PHPStan\Type\Constant\ConstantStringType('number'),
                                    new \PHPStan\Type\Constant\ConstantStringType('numbers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('strings'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\IntegerType(),
                                    ])),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\FloatType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('statistic'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('confidenceLevel'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                            new \PHPStan\Type\Constant\ConstantStringType('ports'),
                            new \PHPStan\Type\Constant\ConstantStringType('number'),
                            new \PHPStan\Type\Constant\ConstantStringType('numbers'),
                            new \PHPStan\Type\Constant\ConstantStringType('strings'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\FloatType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('confidenceLevel'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('in-alarm'),
                            new \PHPStan\Type\Constant\ConstantStringType('alarm-cleared'),
                            new \PHPStan\Type\Constant\ConstantStringType('alarm-invalidated'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FALSE_POSITIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BENIGN_POSITIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRUE_POSITIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putVerificationStateOnViolation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function registerCACertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerCertificateWithoutCA(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificatePem'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceArns'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function rejectCertificateTransfer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function removeThingFromBillingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removeThingFromThingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function replaceTopicRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function searchIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('things'),
                new \PHPStan\Type\Constant\ConstantStringType('thingGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('thingName'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingTypeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingGroupNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('shadow'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceDefender'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectivity'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connected'),
                            new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('disconnectReason'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('thingGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingGroupDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('parentGroupNames'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function setDefaultAuthorizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('authorizerName'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizerArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function setDefaultPolicyVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setLoggingOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setV2LoggingLevel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setV2LoggingOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startAuditMitigationActionsTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startDetectMitigationActionsTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startOnDemandAuditTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startThingRegistrationTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopThingRegistrationTask(): ?\PHPStan\Type\Type
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
    private function testAuthorization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('authResults'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowed'),
                        new \PHPStan\Type\Constant\ConstantStringType('denied'),
                        new \PHPStan\Type\Constant\ConstantStringType('authDecision'),
                        new \PHPStan\Type\Constant\ConstantStringType('missingContextValues'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('resources'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PUBLISH'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBSCRIBE'),
                                new \PHPStan\Type\Constant\ConstantStringType('RECEIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('policies'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('implicitDeny'),
                            new \PHPStan\Type\Constant\ConstantStringType('explicitDeny'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('policies'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('policies'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOWED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPLICIT_DENY'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPLICIT_DENY'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function testInvokeAuthorizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('isAuthenticated'),
                new \PHPStan\Type\Constant\ConstantStringType('principalId'),
                new \PHPStan\Type\Constant\ConstantStringType('policyDocuments'),
                new \PHPStan\Type\Constant\ConstantStringType('refreshAfterInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('disconnectAfterInSeconds'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function transferCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('transferredCertificateArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateAccountAuditConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateAuditSuppression(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateAuthorizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('authorizerName'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizerArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateBillingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('version'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function updateCACertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateCertificateProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificateProviderName'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateProviderArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateCommand(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('commandId'),
                new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('deprecated'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateCustomMetric(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('metricName'),
                new \PHPStan\Type\Constant\ConstantStringType('metricArn'),
                new \PHPStan\Type\Constant\ConstantStringType('metricType'),
                new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('string-list'),
                    new \PHPStan\Type\Constant\ConstantStringType('ip-address-list'),
                    new \PHPStan\Type\Constant\ConstantStringType('number-list'),
                    new \PHPStan\Type\Constant\ConstantStringType('number'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateDimension(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('stringValues'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('TOPIC_FILTER'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateDomainConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainConfigurationName'),
                new \PHPStan\Type\Constant\ConstantStringType('domainConfigurationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateDynamicThingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('version'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function updateEventConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateFleetMetric(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateIndexingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateMitigationAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('actionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updatePackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updatePackageConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updatePackageVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateProvisioningTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateRoleAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('roleAlias'),
                new \PHPStan\Type\Constant\ConstantStringType('roleAliasArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateScheduledAudit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scheduledAuditArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSecurityProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('securityProfileName'),
                new \PHPStan\Type\Constant\ConstantStringType('securityProfileArn'),
                new \PHPStan\Type\Constant\ConstantStringType('securityProfileDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('behaviors'),
                new \PHPStan\Type\Constant\ConstantStringType('alertTargets'),
                new \PHPStan\Type\Constant\ConstantStringType('additionalMetricsToRetain'),
                new \PHPStan\Type\Constant\ConstantStringType('additionalMetricsToRetainV2'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('metricsExportConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('metric'),
                        new \PHPStan\Type\Constant\ConstantStringType('metricDimension'),
                        new \PHPStan\Type\Constant\ConstantStringType('criteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('suppressAlerts'),
                        new \PHPStan\Type\Constant\ConstantStringType('exportMetric'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dimensionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('operator'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IN'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_IN'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparisonOperator'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('durationSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('consecutiveDatapointsToAlarm'),
                            new \PHPStan\Type\Constant\ConstantStringType('consecutiveDatapointsToClear'),
                            new \PHPStan\Type\Constant\ConstantStringType('statisticalThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('mlDetectionConfig'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('less-than'),
                                new \PHPStan\Type\Constant\ConstantStringType('less-than-equals'),
                                new \PHPStan\Type\Constant\ConstantStringType('greater-than'),
                                new \PHPStan\Type\Constant\ConstantStringType('greater-than-equals'),
                                new \PHPStan\Type\Constant\ConstantStringType('in-cidr-set'),
                                new \PHPStan\Type\Constant\ConstantStringType('not-in-cidr-set'),
                                new \PHPStan\Type\Constant\ConstantStringType('in-port-set'),
                                new \PHPStan\Type\Constant\ConstantStringType('not-in-port-set'),
                                new \PHPStan\Type\Constant\ConstantStringType('in-set'),
                                new \PHPStan\Type\Constant\ConstantStringType('not-in-set'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('count'),
                                new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                                new \PHPStan\Type\Constant\ConstantStringType('ports'),
                                new \PHPStan\Type\Constant\ConstantStringType('number'),
                                new \PHPStan\Type\Constant\ConstantStringType('numbers'),
                                new \PHPStan\Type\Constant\ConstantStringType('strings'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\FloatType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('statistic'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('confidenceLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\Constant\ConstantStringType('SNS'), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('alertTargetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('metric'),
                        new \PHPStan\Type\Constant\ConstantStringType('metricDimension'),
                        new \PHPStan\Type\Constant\ConstantStringType('exportMetric'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dimensionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('operator'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IN'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_IN'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('mqttTopic'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('streamId'),
                new \PHPStan\Type\Constant\ConstantStringType('streamArn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('streamVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function updateThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateThingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('version'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function updateThingGroupsForThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateThingType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateTopicRuleDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function validateSecurityProfileBehaviors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('valid'),
                new \PHPStan\Type\Constant\ConstantStringType('validationErrors'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
}