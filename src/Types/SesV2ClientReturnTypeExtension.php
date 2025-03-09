<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SesV2ClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\SesV2\SesV2Client>
     */
    public function getClass(): string
    {
        return \Aws\SesV2\SesV2Client::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchGetMetricData',
            'cancelExportJob',
            'createConfigurationSet',
            'createConfigurationSetEventDestination',
            'createContact',
            'createContactList',
            'createCustomVerificationEmailTemplate',
            'createDedicatedIpPool',
            'createDeliverabilityTestReport',
            'createEmailIdentity',
            'createEmailIdentityPolicy',
            'createEmailTemplate',
            'createExportJob',
            'createImportJob',
            'createMultiRegionEndpoint',
            'deleteConfigurationSet',
            'deleteConfigurationSetEventDestination',
            'deleteContact',
            'deleteContactList',
            'deleteCustomVerificationEmailTemplate',
            'deleteDedicatedIpPool',
            'deleteEmailIdentity',
            'deleteEmailIdentityPolicy',
            'deleteEmailTemplate',
            'deleteMultiRegionEndpoint',
            'deleteSuppressedDestination',
            'getAccount',
            'getBlacklistReports',
            'getConfigurationSet',
            'getConfigurationSetEventDestinations',
            'getContact',
            'getContactList',
            'getCustomVerificationEmailTemplate',
            'getDedicatedIp',
            'getDedicatedIpPool',
            'getDedicatedIps',
            'getDeliverabilityDashboardOptions',
            'getDeliverabilityTestReport',
            'getDomainDeliverabilityCampaign',
            'getDomainStatisticsReport',
            'getEmailIdentity',
            'getEmailIdentityPolicies',
            'getEmailTemplate',
            'getExportJob',
            'getImportJob',
            'getMessageInsights',
            'getMultiRegionEndpoint',
            'getSuppressedDestination',
            'listConfigurationSets',
            'listContactLists',
            'listContacts',
            'listCustomVerificationEmailTemplates',
            'listDedicatedIpPools',
            'listDeliverabilityTestReports',
            'listDomainDeliverabilityCampaigns',
            'listEmailIdentities',
            'listEmailTemplates',
            'listExportJobs',
            'listImportJobs',
            'listMultiRegionEndpoints',
            'listRecommendations',
            'listSuppressedDestinations',
            'listTagsForResource',
            'putAccountDedicatedIpWarmupAttributes',
            'putAccountDetails',
            'putAccountSendingAttributes',
            'putAccountSuppressionAttributes',
            'putAccountVdmAttributes',
            'putConfigurationSetArchivingOptions',
            'putConfigurationSetDeliveryOptions',
            'putConfigurationSetReputationOptions',
            'putConfigurationSetSendingOptions',
            'putConfigurationSetSuppressionOptions',
            'putConfigurationSetTrackingOptions',
            'putConfigurationSetVdmOptions',
            'putDedicatedIpInPool',
            'putDedicatedIpPoolScalingAttributes',
            'putDedicatedIpWarmupAttributes',
            'putDeliverabilityDashboardOption',
            'putEmailIdentityConfigurationSetAttributes',
            'putEmailIdentityDkimAttributes',
            'putEmailIdentityDkimSigningAttributes',
            'putEmailIdentityFeedbackAttributes',
            'putEmailIdentityMailFromAttributes',
            'putSuppressedDestination',
            'sendBulkEmail',
            'sendCustomVerificationEmail',
            'sendEmail',
            'tagResource',
            'testRenderEmailTemplate',
            'untagResource',
            'updateConfigurationSetEventDestination',
            'updateContact',
            'updateContactList',
            'updateCustomVerificationEmailTemplate',
            'updateEmailIdentityPolicy',
            'updateEmailTemplate',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchGetMetricData' => $this->batchGetMetricData(),
            'cancelExportJob' => $this->cancelExportJob(),
            'createConfigurationSet' => $this->createConfigurationSet(),
            'createConfigurationSetEventDestination' => $this->createConfigurationSetEventDestination(),
            'createContact' => $this->createContact(),
            'createContactList' => $this->createContactList(),
            'createCustomVerificationEmailTemplate' => $this->createCustomVerificationEmailTemplate(),
            'createDedicatedIpPool' => $this->createDedicatedIpPool(),
            'createDeliverabilityTestReport' => $this->createDeliverabilityTestReport(),
            'createEmailIdentity' => $this->createEmailIdentity(),
            'createEmailIdentityPolicy' => $this->createEmailIdentityPolicy(),
            'createEmailTemplate' => $this->createEmailTemplate(),
            'createExportJob' => $this->createExportJob(),
            'createImportJob' => $this->createImportJob(),
            'createMultiRegionEndpoint' => $this->createMultiRegionEndpoint(),
            'deleteConfigurationSet' => $this->deleteConfigurationSet(),
            'deleteConfigurationSetEventDestination' => $this->deleteConfigurationSetEventDestination(),
            'deleteContact' => $this->deleteContact(),
            'deleteContactList' => $this->deleteContactList(),
            'deleteCustomVerificationEmailTemplate' => $this->deleteCustomVerificationEmailTemplate(),
            'deleteDedicatedIpPool' => $this->deleteDedicatedIpPool(),
            'deleteEmailIdentity' => $this->deleteEmailIdentity(),
            'deleteEmailIdentityPolicy' => $this->deleteEmailIdentityPolicy(),
            'deleteEmailTemplate' => $this->deleteEmailTemplate(),
            'deleteMultiRegionEndpoint' => $this->deleteMultiRegionEndpoint(),
            'deleteSuppressedDestination' => $this->deleteSuppressedDestination(),
            'getAccount' => $this->getAccount(),
            'getBlacklistReports' => $this->getBlacklistReports(),
            'getConfigurationSet' => $this->getConfigurationSet(),
            'getConfigurationSetEventDestinations' => $this->getConfigurationSetEventDestinations(),
            'getContact' => $this->getContact(),
            'getContactList' => $this->getContactList(),
            'getCustomVerificationEmailTemplate' => $this->getCustomVerificationEmailTemplate(),
            'getDedicatedIp' => $this->getDedicatedIp(),
            'getDedicatedIpPool' => $this->getDedicatedIpPool(),
            'getDedicatedIps' => $this->getDedicatedIps(),
            'getDeliverabilityDashboardOptions' => $this->getDeliverabilityDashboardOptions(),
            'getDeliverabilityTestReport' => $this->getDeliverabilityTestReport(),
            'getDomainDeliverabilityCampaign' => $this->getDomainDeliverabilityCampaign(),
            'getDomainStatisticsReport' => $this->getDomainStatisticsReport(),
            'getEmailIdentity' => $this->getEmailIdentity(),
            'getEmailIdentityPolicies' => $this->getEmailIdentityPolicies(),
            'getEmailTemplate' => $this->getEmailTemplate(),
            'getExportJob' => $this->getExportJob(),
            'getImportJob' => $this->getImportJob(),
            'getMessageInsights' => $this->getMessageInsights(),
            'getMultiRegionEndpoint' => $this->getMultiRegionEndpoint(),
            'getSuppressedDestination' => $this->getSuppressedDestination(),
            'listConfigurationSets' => $this->listConfigurationSets(),
            'listContactLists' => $this->listContactLists(),
            'listContacts' => $this->listContacts(),
            'listCustomVerificationEmailTemplates' => $this->listCustomVerificationEmailTemplates(),
            'listDedicatedIpPools' => $this->listDedicatedIpPools(),
            'listDeliverabilityTestReports' => $this->listDeliverabilityTestReports(),
            'listDomainDeliverabilityCampaigns' => $this->listDomainDeliverabilityCampaigns(),
            'listEmailIdentities' => $this->listEmailIdentities(),
            'listEmailTemplates' => $this->listEmailTemplates(),
            'listExportJobs' => $this->listExportJobs(),
            'listImportJobs' => $this->listImportJobs(),
            'listMultiRegionEndpoints' => $this->listMultiRegionEndpoints(),
            'listRecommendations' => $this->listRecommendations(),
            'listSuppressedDestinations' => $this->listSuppressedDestinations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putAccountDedicatedIpWarmupAttributes' => $this->putAccountDedicatedIpWarmupAttributes(),
            'putAccountDetails' => $this->putAccountDetails(),
            'putAccountSendingAttributes' => $this->putAccountSendingAttributes(),
            'putAccountSuppressionAttributes' => $this->putAccountSuppressionAttributes(),
            'putAccountVdmAttributes' => $this->putAccountVdmAttributes(),
            'putConfigurationSetArchivingOptions' => $this->putConfigurationSetArchivingOptions(),
            'putConfigurationSetDeliveryOptions' => $this->putConfigurationSetDeliveryOptions(),
            'putConfigurationSetReputationOptions' => $this->putConfigurationSetReputationOptions(),
            'putConfigurationSetSendingOptions' => $this->putConfigurationSetSendingOptions(),
            'putConfigurationSetSuppressionOptions' => $this->putConfigurationSetSuppressionOptions(),
            'putConfigurationSetTrackingOptions' => $this->putConfigurationSetTrackingOptions(),
            'putConfigurationSetVdmOptions' => $this->putConfigurationSetVdmOptions(),
            'putDedicatedIpInPool' => $this->putDedicatedIpInPool(),
            'putDedicatedIpPoolScalingAttributes' => $this->putDedicatedIpPoolScalingAttributes(),
            'putDedicatedIpWarmupAttributes' => $this->putDedicatedIpWarmupAttributes(),
            'putDeliverabilityDashboardOption' => $this->putDeliverabilityDashboardOption(),
            'putEmailIdentityConfigurationSetAttributes' => $this->putEmailIdentityConfigurationSetAttributes(),
            'putEmailIdentityDkimAttributes' => $this->putEmailIdentityDkimAttributes(),
            'putEmailIdentityDkimSigningAttributes' => $this->putEmailIdentityDkimSigningAttributes(),
            'putEmailIdentityFeedbackAttributes' => $this->putEmailIdentityFeedbackAttributes(),
            'putEmailIdentityMailFromAttributes' => $this->putEmailIdentityMailFromAttributes(),
            'putSuppressedDestination' => $this->putSuppressedDestination(),
            'sendBulkEmail' => $this->sendBulkEmail(),
            'sendCustomVerificationEmail' => $this->sendCustomVerificationEmail(),
            'sendEmail' => $this->sendEmail(),
            'tagResource' => $this->tagResource(),
            'testRenderEmailTemplate' => $this->testRenderEmailTemplate(),
            'untagResource' => $this->untagResource(),
            'updateConfigurationSetEventDestination' => $this->updateConfigurationSetEventDestination(),
            'updateContact' => $this->updateContact(),
            'updateContactList' => $this->updateContactList(),
            'updateCustomVerificationEmailTemplate' => $this->updateCustomVerificationEmailTemplate(),
            'updateEmailIdentityPolicy' => $this->updateEmailIdentityPolicy(),
            'updateEmailTemplate' => $this->updateEmailTemplate(),
        };
    }
    private function batchGetMetricData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamps'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function cancelExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createConfigurationSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createConfigurationSetEventDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createContactList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createCustomVerificationEmailTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createDedicatedIpPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createDeliverabilityTestReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReportId'),
                new \PHPStan\Type\Constant\ConstantStringType('DeliverabilityTestStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                ]),
            ]),
        ]);
    }
    private function createEmailIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityType'),
                new \PHPStan\Type\Constant\ConstantStringType('VerifiedForSendingStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DkimAttributes'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ADDRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN'),
                    new \PHPStan\Type\Constant\ConstantStringType('MANAGED_DOMAIN'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SigningEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tokens'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningAttributesOrigin'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextSigningKeyLength'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentSigningKeyLength'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastKeyGenerationTimestamp'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_AF_SOUTH_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_EU_NORTH_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_AP_SOUTH_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_EU_WEST_3'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_EU_WEST_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_EU_SOUTH_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_EU_WEST_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_AP_NORTHEAST_3'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_AP_NORTHEAST_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_ME_SOUTH_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_AP_NORTHEAST_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_IL_CENTRAL_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_SA_EAST_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_CA_CENTRAL_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_AP_SOUTHEAST_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_AP_SOUTHEAST_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_AP_SOUTHEAST_3'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_EU_CENTRAL_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_US_EAST_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_US_EAST_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_US_WEST_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_US_WEST_2'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_1024_BIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_2048_BIT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_1024_BIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_2048_BIT'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createEmailIdentityPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createEmailTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createMultiRegionEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteConfigurationSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteConfigurationSetEventDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteContactList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteCustomVerificationEmailTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDedicatedIpPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEmailIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEmailIdentityPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEmailTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteMultiRegionEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
            ]),
        ]);
    }
    private function deleteSuppressedDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DedicatedIpAutoWarmupEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('EnforcementStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('ProductionAccessEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('SendQuota'),
                new \PHPStan\Type\Constant\ConstantStringType('SendingEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('SuppressionAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('Details'),
                new \PHPStan\Type\Constant\ConstantStringType('VdmAttributes'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Max24HourSend'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSendRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SentLast24Hours'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SuppressedReasons'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BOUNCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLAINT'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MailType'),
                    new \PHPStan\Type\Constant\ConstantStringType('WebsiteURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactLanguage'),
                    new \PHPStan\Type\Constant\ConstantStringType('UseCaseDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalContactEmailAddresses'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewDetails'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MARKETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EN'),
                        new \PHPStan\Type\Constant\ConstantStringType('JA'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CaseId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('GRANTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DENIED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VdmEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('DashboardAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('GuardianAttributes'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EngagementMetrics'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OptimizedSharedDelivery'),
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
    private function getBlacklistReports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BlacklistReport'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RblName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListingTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]))),
            ]),
        ]);
    }
    private function getConfigurationSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('TrackingOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('DeliveryOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('ReputationOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('SendingOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('SuppressionOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('VdmOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('ArchivingOptions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CustomRedirectDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('HttpsPolicy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUIRE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUIRE_OPEN_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONAL'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TlsPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('SendingPoolName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxDeliverySeconds'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUIRE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReputationMetricsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastFreshStart'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SendingEnabled'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SuppressedReasons'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BOUNCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLAINT'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DashboardOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('GuardianOptions'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EngagementMetrics'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OptimizedSharedDelivery'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ArchiveArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getConfigurationSetEventDestinations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventDestinations'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('MatchingEventTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnsDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventBridgeDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('PinpointDestination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SEND'),
                                new \PHPStan\Type\Constant\ConstantStringType('REJECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOUNCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLAINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELIVERY'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                                new \PHPStan\Type\Constant\ConstantStringType('CLICK'),
                                new \PHPStan\Type\Constant\ConstantStringType('RENDERING_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELIVERY_DELAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBSCRIPTION'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeliveryStreamArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DimensionConfigurations'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionValueSource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DefaultDimensionValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MESSAGE_TAG'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_HEADER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LINK_TAG'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EventBusArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactListName'),
                new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('TopicPreferences'),
                new \PHPStan\Type\Constant\ConstantStringType('TopicDefaultPreferences'),
                new \PHPStan\Type\Constant\ConstantStringType('UnsubscribeAll'),
                new \PHPStan\Type\Constant\ConstantStringType('AttributesData'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubscriptionStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPT_IN'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPT_OUT'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubscriptionStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPT_IN'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPT_OUT'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getContactList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactListName'),
                new \PHPStan\Type\Constant\ConstantStringType('Topics'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultSubscriptionStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPT_IN'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPT_OUT'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function getCustomVerificationEmailTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                new \PHPStan\Type\Constant\ConstantStringType('FromEmailAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateSubject'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateContent'),
                new \PHPStan\Type\Constant\ConstantStringType('SuccessRedirectionURL'),
                new \PHPStan\Type\Constant\ConstantStringType('FailureRedirectionURL'),
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
    private function getDedicatedIp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DedicatedIp'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Ip'),
                    new \PHPStan\Type\Constant\ConstantStringType('WarmupStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('WarmupPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DONE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getDedicatedIpPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DedicatedIpPool'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PoolName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScalingMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANAGED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getDedicatedIps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DedicatedIps'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Ip'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarmupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarmupPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('PoolName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DONE'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDeliverabilityDashboardOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DashboardEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionExpiryDate'),
                new \PHPStan\Type\Constant\ConstantStringType('AccountStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('ActiveSubscribedDomains'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingExpirationSubscribedDomains'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_EXPIRATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubscriptionStartDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('InboxPlacementTrackingOption'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Global'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrackedIsps'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubscriptionStartDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('InboxPlacementTrackingOption'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Global'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrackedIsps'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getDeliverabilityTestReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeliverabilityTestReport'),
                new \PHPStan\Type\Constant\ConstantStringType('OverallPlacement'),
                new \PHPStan\Type\Constant\ConstantStringType('IspPlacements'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReportId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                    new \PHPStan\Type\Constant\ConstantStringType('FromEmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliverabilityTestStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InboxPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('SpamPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('SpfPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('DkimPercentage'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IspName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlacementStatistics'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InboxPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpamPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('MissingPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpfPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('DkimPercentage'),
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
    private function getDomainDeliverabilityCampaign(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainDeliverabilityCampaign'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CampaignId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                    new \PHPStan\Type\Constant\ConstantStringType('FromAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('SendingIps'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirstSeenDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSeenDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InboxCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('SpamCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadDeleteRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProjectedVolume'),
                    new \PHPStan\Type\Constant\ConstantStringType('Esps'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getDomainStatisticsReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OverallVolume'),
                new \PHPStan\Type\Constant\ConstantStringType('DailyVolumes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeStatistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadRatePercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainIspPlacements'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InboxRawCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpamRawCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProjectedInbox'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProjectedSpam'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IspName'),
                            new \PHPStan\Type\Constant\ConstantStringType('InboxRawCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpamRawCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('InboxPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpamPercentage'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeStatistics'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainIspPlacements'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InboxRawCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpamRawCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProjectedInbox'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProjectedSpam'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IspName'),
                                new \PHPStan\Type\Constant\ConstantStringType('InboxRawCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('SpamRawCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('InboxPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('SpamPercentage'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getEmailIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityType'),
                new \PHPStan\Type\Constant\ConstantStringType('FeedbackForwardingStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('VerifiedForSendingStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DkimAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('MailFromAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('VerificationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('VerificationInfo'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ADDRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN'),
                    new \PHPStan\Type\Constant\ConstantStringType('MANAGED_DOMAIN'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SigningEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tokens'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningAttributesOrigin'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextSigningKeyLength'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentSigningKeyLength'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastKeyGenerationTimestamp'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_AF_SOUTH_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_EU_NORTH_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_AP_SOUTH_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_EU_WEST_3'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_EU_WEST_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_EU_SOUTH_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_EU_WEST_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_AP_NORTHEAST_3'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_AP_NORTHEAST_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_ME_SOUTH_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_AP_NORTHEAST_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_IL_CENTRAL_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_SA_EAST_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_CA_CENTRAL_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_AP_SOUTHEAST_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_AP_SOUTHEAST_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_AP_SOUTHEAST_3'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_EU_CENTRAL_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_US_EAST_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_US_EAST_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_US_WEST_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SES_US_WEST_2'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_1024_BIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_2048_BIT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_1024_BIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_2048_BIT'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MailFromDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('MailFromDomainStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('BehaviorOnMxFailure'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_FAILURE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USE_DEFAULT_VALUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECT_MESSAGE'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
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
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_FAILURE'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LastCheckedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SOARecord'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DNS_SERVER_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOST_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('TYPE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_VALUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_PRIMARY_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_PRIMARY_BYO_DKIM_NOT_SUPPORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_REPLICA_AS_PRIMARY_NOT_SUPPORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_PRIMARY_INVALID_REGION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryNameServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdminEmail'),
                        new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getEmailIdentityPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policies'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getEmailTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateContent'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    new \PHPStan\Type\Constant\ConstantStringType('Html'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportSourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportDestination'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportDataSource'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('FailureInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('Statistics'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('METRICS_DATA'),
                    new \PHPStan\Type\Constant\ConstantStringType('MESSAGE_INSIGHTS'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Url'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MetricsDataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('MessageInsightsDataSource'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndDate'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL_IDENTITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('ISP'),
                        ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ]))),
                        new \PHPStan\Type\Constant\ConstantStringType('VDM'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Aggregation'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SEND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLAINT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PERMANENT_BOUNCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRANSIENT_BOUNCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLICK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELIVERY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELIVERY_OPEN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELIVERY_CLICK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELIVERY_COMPLAINT'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VOLUME'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Include'),
                        new \PHPStan\Type\Constant\ConstantStringType('Exclude'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxResults'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FromEmailAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                            new \PHPStan\Type\Constant\ConstantStringType('Isp'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastDeliveryEvent'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastEngagementEvent'),
                        ], [
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
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SEND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELIVERY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRANSIENT_BOUNCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PERMANENT_BOUNCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNDETERMINED_BOUNCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLAINT'),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLICK'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FromEmailAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                            new \PHPStan\Type\Constant\ConstantStringType('Isp'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastDeliveryEvent'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastEngagementEvent'),
                        ], [
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
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SEND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELIVERY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRANSIENT_BOUNCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PERMANENT_BOUNCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNDETERMINED_BOUNCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLAINT'),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLICK'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FailedRecordsS3Url'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProcessedRecordsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportedRecordsCount'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportDestination'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportDataSource'),
                new \PHPStan\Type\Constant\ConstantStringType('FailureInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('ProcessedRecordsCount'),
                new \PHPStan\Type\Constant\ConstantStringType('FailedRecordsCount'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SuppressionListDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactListDestination'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SuppressionListImportAction'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ContactListName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContactListImportAction'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Url'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataFormat'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FailedRecordsS3Url'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getMessageInsights(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
                new \PHPStan\Type\Constant\ConstantStringType('FromEmailAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                new \PHPStan\Type\Constant\ConstantStringType('EmailTags'),
                new \PHPStan\Type\Constant\ConstantStringType('Insights'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('Isp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Events'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Details'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SEND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REJECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BOUNCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLAINT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELIVERY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLICK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RENDERING_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELIVERY_DELAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBSCRIPTION'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bounce'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Complaint'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BounceType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BounceSubType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DiagnosticCode'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('UNDETERMINED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PERMANENT'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ComplaintSubType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ComplaintFeedbackType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getMultiRegionEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointName'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                new \PHPStan\Type\Constant\ConstantStringType('Routes'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getSuppressedDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SuppressedDestination'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BOUNCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLAINT'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('FeedbackId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listConfigurationSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listContactLists(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactLists'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ContactListName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listContacts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Contacts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopicPreferences'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopicDefaultPreferences'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnsubscribeAll'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TopicName'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionStatus'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OPT_IN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPT_OUT'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TopicName'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionStatus'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OPT_IN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPT_OUT'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCustomVerificationEmailTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CustomVerificationEmailTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                        new \PHPStan\Type\Constant\ConstantStringType('FromEmailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('TemplateSubject'),
                        new \PHPStan\Type\Constant\ConstantStringType('SuccessRedirectionURL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureRedirectionURL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDedicatedIpPools(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DedicatedIpPools'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDeliverabilityTestReports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeliverabilityTestReports'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReportId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReportName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                        new \PHPStan\Type\Constant\ConstantStringType('FromEmailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeliverabilityTestStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDomainDeliverabilityCampaigns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainDeliverabilityCampaigns'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CampaignId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                        new \PHPStan\Type\Constant\ConstantStringType('FromAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('SendingIps'),
                        new \PHPStan\Type\Constant\ConstantStringType('FirstSeenDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastSeenDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('InboxCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpamCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadRate'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteRate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadDeleteRate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProjectedVolume'),
                        new \PHPStan\Type\Constant\ConstantStringType('Esps'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEmailIdentities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EmailIdentities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityType'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SendingEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('VerificationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANAGED_DOMAIN'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEmailTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TemplatesMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listExportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExportJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExportSourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('METRICS_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('MESSAGE_INSIGHTS'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImportJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImportDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProcessedRecordsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailedRecordsCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SuppressionListDestination'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContactListDestination'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SuppressionListImportAction'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ContactListName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContactListImportAction'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMultiRegionEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MultiRegionEndpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Recommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Impact'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DKIM'),
                            new \PHPStan\Type\Constant\ConstantStringType('DMARC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                            new \PHPStan\Type\Constant\ConstantStringType('BIMI'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLAINT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('FIXED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSuppressedDestinations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SuppressedDestinationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BOUNCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLAINT'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function putAccountDedicatedIpWarmupAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putAccountDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putAccountSendingAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putAccountSuppressionAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putAccountVdmAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putConfigurationSetArchivingOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putConfigurationSetDeliveryOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putConfigurationSetReputationOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putConfigurationSetSendingOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putConfigurationSetSuppressionOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putConfigurationSetTrackingOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putConfigurationSetVdmOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putDedicatedIpInPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putDedicatedIpPoolScalingAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putDedicatedIpWarmupAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putDeliverabilityDashboardOption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putEmailIdentityConfigurationSetAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putEmailIdentityDkimAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putEmailIdentityDkimSigningAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DkimStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DkimTokens'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_FAILURE'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function putEmailIdentityFeedbackAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putEmailIdentityMailFromAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putSuppressedDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function sendBulkEmail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BulkEmailEntryResults'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Error'),
                        new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MESSAGE_REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAIL_FROM_DOMAIN_NOT_VERIFIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_SET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEMPLATE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_SUSPENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_THROTTLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_DAILY_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SENDING_POOL_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_SENDING_PAUSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_SET_SENDING_PAUSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIENT_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function sendCustomVerificationEmail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function sendEmail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function testRenderEmailTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RenderedTemplate'),
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
    private function updateConfigurationSetEventDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateContactList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateCustomVerificationEmailTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateEmailIdentityPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateEmailTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}