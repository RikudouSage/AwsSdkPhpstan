<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class PinpointEmailClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\PinpointEmail\PinpointEmailClient>
     */
    public function getClass(): string
    {
        return \Aws\PinpointEmail\PinpointEmailClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createConfigurationSet',
            'createConfigurationSetEventDestination',
            'createDedicatedIpPool',
            'createDeliverabilityTestReport',
            'createEmailIdentity',
            'deleteConfigurationSet',
            'deleteConfigurationSetEventDestination',
            'deleteDedicatedIpPool',
            'deleteEmailIdentity',
            'getAccount',
            'getBlacklistReports',
            'getConfigurationSet',
            'getConfigurationSetEventDestinations',
            'getDedicatedIp',
            'getDedicatedIps',
            'getDeliverabilityDashboardOptions',
            'getDeliverabilityTestReport',
            'getDomainDeliverabilityCampaign',
            'getDomainStatisticsReport',
            'getEmailIdentity',
            'listConfigurationSets',
            'listDedicatedIpPools',
            'listDeliverabilityTestReports',
            'listDomainDeliverabilityCampaigns',
            'listEmailIdentities',
            'listTagsForResource',
            'putAccountDedicatedIpWarmupAttributes',
            'putAccountSendingAttributes',
            'putConfigurationSetDeliveryOptions',
            'putConfigurationSetReputationOptions',
            'putConfigurationSetSendingOptions',
            'putConfigurationSetTrackingOptions',
            'putDedicatedIpInPool',
            'putDedicatedIpWarmupAttributes',
            'putDeliverabilityDashboardOption',
            'putEmailIdentityDkimAttributes',
            'putEmailIdentityFeedbackAttributes',
            'putEmailIdentityMailFromAttributes',
            'sendEmail',
            'tagResource',
            'untagResource',
            'updateConfigurationSetEventDestination',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createConfigurationSet' => $this->createConfigurationSet(),
            'createConfigurationSetEventDestination' => $this->createConfigurationSetEventDestination(),
            'createDedicatedIpPool' => $this->createDedicatedIpPool(),
            'createDeliverabilityTestReport' => $this->createDeliverabilityTestReport(),
            'createEmailIdentity' => $this->createEmailIdentity(),
            'deleteConfigurationSet' => $this->deleteConfigurationSet(),
            'deleteConfigurationSetEventDestination' => $this->deleteConfigurationSetEventDestination(),
            'deleteDedicatedIpPool' => $this->deleteDedicatedIpPool(),
            'deleteEmailIdentity' => $this->deleteEmailIdentity(),
            'getAccount' => $this->getAccount(),
            'getBlacklistReports' => $this->getBlacklistReports(),
            'getConfigurationSet' => $this->getConfigurationSet(),
            'getConfigurationSetEventDestinations' => $this->getConfigurationSetEventDestinations(),
            'getDedicatedIp' => $this->getDedicatedIp(),
            'getDedicatedIps' => $this->getDedicatedIps(),
            'getDeliverabilityDashboardOptions' => $this->getDeliverabilityDashboardOptions(),
            'getDeliverabilityTestReport' => $this->getDeliverabilityTestReport(),
            'getDomainDeliverabilityCampaign' => $this->getDomainDeliverabilityCampaign(),
            'getDomainStatisticsReport' => $this->getDomainStatisticsReport(),
            'getEmailIdentity' => $this->getEmailIdentity(),
            'listConfigurationSets' => $this->listConfigurationSets(),
            'listDedicatedIpPools' => $this->listDedicatedIpPools(),
            'listDeliverabilityTestReports' => $this->listDeliverabilityTestReports(),
            'listDomainDeliverabilityCampaigns' => $this->listDomainDeliverabilityCampaigns(),
            'listEmailIdentities' => $this->listEmailIdentities(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putAccountDedicatedIpWarmupAttributes' => $this->putAccountDedicatedIpWarmupAttributes(),
            'putAccountSendingAttributes' => $this->putAccountSendingAttributes(),
            'putConfigurationSetDeliveryOptions' => $this->putConfigurationSetDeliveryOptions(),
            'putConfigurationSetReputationOptions' => $this->putConfigurationSetReputationOptions(),
            'putConfigurationSetSendingOptions' => $this->putConfigurationSetSendingOptions(),
            'putConfigurationSetTrackingOptions' => $this->putConfigurationSetTrackingOptions(),
            'putDedicatedIpInPool' => $this->putDedicatedIpInPool(),
            'putDedicatedIpWarmupAttributes' => $this->putDedicatedIpWarmupAttributes(),
            'putDeliverabilityDashboardOption' => $this->putDeliverabilityDashboardOption(),
            'putEmailIdentityDkimAttributes' => $this->putEmailIdentityDkimAttributes(),
            'putEmailIdentityFeedbackAttributes' => $this->putEmailIdentityFeedbackAttributes(),
            'putEmailIdentityMailFromAttributes' => $this->putEmailIdentityMailFromAttributes(),
            'sendEmail' => $this->sendEmail(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateConfigurationSetEventDestination' => $this->updateConfigurationSetEventDestination(),
        };
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
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
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
    private function getAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SendQuota'),
                new \PHPStan\Type\Constant\ConstantStringType('SendingEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('DedicatedIpAutoWarmupEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('EnforcementStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('ProductionAccessEnabled'),
            ], [
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
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getBlacklistReports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BlacklistReport'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RblName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ListingTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
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
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CustomRedirectDomain'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TlsPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('SendingPoolName'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUIRE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MatchingEventTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('PinpointDestination'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SEND'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOUNCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLAINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELIVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLICK'),
                        new \PHPStan\Type\Constant\ConstantStringType('RENDERING_FAILURE'),
                    ]),
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
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
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
    private function getDedicatedIps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DedicatedIps'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
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
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
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
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
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
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
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
                ]),
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
                ]),
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
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
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
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                    ]),
                    new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\StringType(),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SendingEnabled'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOMAIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANAGED_DOMAIN'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putAccountDedicatedIpWarmupAttributes(): ?\PHPStan\Type\Type
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
    private function putConfigurationSetTrackingOptions(): ?\PHPStan\Type\Type
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
    private function putEmailIdentityDkimAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
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
}