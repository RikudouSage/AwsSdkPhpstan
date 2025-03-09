<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SesClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Ses\SesClient>
     */
    public function getClass(): string
    {
        return \Aws\Ses\SesClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cloneReceiptRuleSet',
            'createConfigurationSet',
            'createConfigurationSetEventDestination',
            'createConfigurationSetTrackingOptions',
            'createCustomVerificationEmailTemplate',
            'createReceiptFilter',
            'createReceiptRule',
            'createReceiptRuleSet',
            'createTemplate',
            'deleteConfigurationSet',
            'deleteConfigurationSetEventDestination',
            'deleteConfigurationSetTrackingOptions',
            'deleteCustomVerificationEmailTemplate',
            'deleteIdentity',
            'deleteIdentityPolicy',
            'deleteReceiptFilter',
            'deleteReceiptRule',
            'deleteReceiptRuleSet',
            'deleteTemplate',
            'deleteVerifiedEmailAddress',
            'describeActiveReceiptRuleSet',
            'describeConfigurationSet',
            'describeReceiptRule',
            'describeReceiptRuleSet',
            'getAccountSendingEnabled',
            'getCustomVerificationEmailTemplate',
            'getIdentityDkimAttributes',
            'getIdentityMailFromDomainAttributes',
            'getIdentityNotificationAttributes',
            'getIdentityPolicies',
            'getIdentityVerificationAttributes',
            'getSendQuota',
            'getSendStatistics',
            'getTemplate',
            'listConfigurationSets',
            'listCustomVerificationEmailTemplates',
            'listIdentities',
            'listIdentityPolicies',
            'listReceiptFilters',
            'listReceiptRuleSets',
            'listTemplates',
            'listVerifiedEmailAddresses',
            'putConfigurationSetDeliveryOptions',
            'putIdentityPolicy',
            'reorderReceiptRuleSet',
            'sendBounce',
            'sendBulkTemplatedEmail',
            'sendCustomVerificationEmail',
            'sendEmail',
            'sendRawEmail',
            'sendTemplatedEmail',
            'setActiveReceiptRuleSet',
            'setIdentityDkimEnabled',
            'setIdentityFeedbackForwardingEnabled',
            'setIdentityHeadersInNotificationsEnabled',
            'setIdentityMailFromDomain',
            'setIdentityNotificationTopic',
            'setReceiptRulePosition',
            'testRenderTemplate',
            'updateAccountSendingEnabled',
            'updateConfigurationSetEventDestination',
            'updateConfigurationSetReputationMetricsEnabled',
            'updateConfigurationSetSendingEnabled',
            'updateConfigurationSetTrackingOptions',
            'updateCustomVerificationEmailTemplate',
            'updateReceiptRule',
            'updateTemplate',
            'verifyDomainDkim',
            'verifyDomainIdentity',
            'verifyEmailAddress',
            'verifyEmailIdentity',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cloneReceiptRuleSet' => $this->cloneReceiptRuleSet(),
            'createConfigurationSet' => $this->createConfigurationSet(),
            'createConfigurationSetEventDestination' => $this->createConfigurationSetEventDestination(),
            'createConfigurationSetTrackingOptions' => $this->createConfigurationSetTrackingOptions(),
            'createCustomVerificationEmailTemplate' => $this->createCustomVerificationEmailTemplate(),
            'createReceiptFilter' => $this->createReceiptFilter(),
            'createReceiptRule' => $this->createReceiptRule(),
            'createReceiptRuleSet' => $this->createReceiptRuleSet(),
            'createTemplate' => $this->createTemplate(),
            'deleteConfigurationSet' => $this->deleteConfigurationSet(),
            'deleteConfigurationSetEventDestination' => $this->deleteConfigurationSetEventDestination(),
            'deleteConfigurationSetTrackingOptions' => $this->deleteConfigurationSetTrackingOptions(),
            'deleteCustomVerificationEmailTemplate' => $this->deleteCustomVerificationEmailTemplate(),
            'deleteIdentity' => $this->deleteIdentity(),
            'deleteIdentityPolicy' => $this->deleteIdentityPolicy(),
            'deleteReceiptFilter' => $this->deleteReceiptFilter(),
            'deleteReceiptRule' => $this->deleteReceiptRule(),
            'deleteReceiptRuleSet' => $this->deleteReceiptRuleSet(),
            'deleteTemplate' => $this->deleteTemplate(),
            'deleteVerifiedEmailAddress' => $this->deleteVerifiedEmailAddress(),
            'describeActiveReceiptRuleSet' => $this->describeActiveReceiptRuleSet(),
            'describeConfigurationSet' => $this->describeConfigurationSet(),
            'describeReceiptRule' => $this->describeReceiptRule(),
            'describeReceiptRuleSet' => $this->describeReceiptRuleSet(),
            'getAccountSendingEnabled' => $this->getAccountSendingEnabled(),
            'getCustomVerificationEmailTemplate' => $this->getCustomVerificationEmailTemplate(),
            'getIdentityDkimAttributes' => $this->getIdentityDkimAttributes(),
            'getIdentityMailFromDomainAttributes' => $this->getIdentityMailFromDomainAttributes(),
            'getIdentityNotificationAttributes' => $this->getIdentityNotificationAttributes(),
            'getIdentityPolicies' => $this->getIdentityPolicies(),
            'getIdentityVerificationAttributes' => $this->getIdentityVerificationAttributes(),
            'getSendQuota' => $this->getSendQuota(),
            'getSendStatistics' => $this->getSendStatistics(),
            'getTemplate' => $this->getTemplate(),
            'listConfigurationSets' => $this->listConfigurationSets(),
            'listCustomVerificationEmailTemplates' => $this->listCustomVerificationEmailTemplates(),
            'listIdentities' => $this->listIdentities(),
            'listIdentityPolicies' => $this->listIdentityPolicies(),
            'listReceiptFilters' => $this->listReceiptFilters(),
            'listReceiptRuleSets' => $this->listReceiptRuleSets(),
            'listTemplates' => $this->listTemplates(),
            'listVerifiedEmailAddresses' => $this->listVerifiedEmailAddresses(),
            'putConfigurationSetDeliveryOptions' => $this->putConfigurationSetDeliveryOptions(),
            'putIdentityPolicy' => $this->putIdentityPolicy(),
            'reorderReceiptRuleSet' => $this->reorderReceiptRuleSet(),
            'sendBounce' => $this->sendBounce(),
            'sendBulkTemplatedEmail' => $this->sendBulkTemplatedEmail(),
            'sendCustomVerificationEmail' => $this->sendCustomVerificationEmail(),
            'sendEmail' => $this->sendEmail(),
            'sendRawEmail' => $this->sendRawEmail(),
            'sendTemplatedEmail' => $this->sendTemplatedEmail(),
            'setActiveReceiptRuleSet' => $this->setActiveReceiptRuleSet(),
            'setIdentityDkimEnabled' => $this->setIdentityDkimEnabled(),
            'setIdentityFeedbackForwardingEnabled' => $this->setIdentityFeedbackForwardingEnabled(),
            'setIdentityHeadersInNotificationsEnabled' => $this->setIdentityHeadersInNotificationsEnabled(),
            'setIdentityMailFromDomain' => $this->setIdentityMailFromDomain(),
            'setIdentityNotificationTopic' => $this->setIdentityNotificationTopic(),
            'setReceiptRulePosition' => $this->setReceiptRulePosition(),
            'testRenderTemplate' => $this->testRenderTemplate(),
            'updateAccountSendingEnabled' => $this->updateAccountSendingEnabled(),
            'updateConfigurationSetEventDestination' => $this->updateConfigurationSetEventDestination(),
            'updateConfigurationSetReputationMetricsEnabled' => $this->updateConfigurationSetReputationMetricsEnabled(),
            'updateConfigurationSetSendingEnabled' => $this->updateConfigurationSetSendingEnabled(),
            'updateConfigurationSetTrackingOptions' => $this->updateConfigurationSetTrackingOptions(),
            'updateCustomVerificationEmailTemplate' => $this->updateCustomVerificationEmailTemplate(),
            'updateReceiptRule' => $this->updateReceiptRule(),
            'updateTemplate' => $this->updateTemplate(),
            'verifyDomainDkim' => $this->verifyDomainDkim(),
            'verifyDomainIdentity' => $this->verifyDomainIdentity(),
            'verifyEmailAddress' => $this->verifyEmailAddress(),
            'verifyEmailIdentity' => $this->verifyEmailIdentity(),
        };
    }
    private function cloneReceiptRuleSet(): ?\PHPStan\Type\Type
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
    private function createConfigurationSetTrackingOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createCustomVerificationEmailTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createReceiptFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createReceiptRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createReceiptRuleSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
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
    private function deleteConfigurationSetTrackingOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteCustomVerificationEmailTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteIdentityPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteReceiptFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteReceiptRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteReceiptRuleSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteVerifiedEmailAddress(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeActiveReceiptRuleSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TlsPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('Recipients'),
                    new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScanEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Require'),
                        new \PHPStan\Type\Constant\ConstantStringType('Optional'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('BounceAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkmailAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('StopAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddHeaderAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNSAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectAction'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectKeyPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmtpReplyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sender'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('OrganizationArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvocationType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Event'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestResponse'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('RuleSet'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                            new \PHPStan\Type\Constant\ConstantStringType('HeaderValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Encoding'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UTF-8'),
                                new \PHPStan\Type\Constant\ConstantStringType('Base64'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAMRoleARN'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function describeConfigurationSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSet'),
                new \PHPStan\Type\Constant\ConstantStringType('EventDestinations'),
                new \PHPStan\Type\Constant\ConstantStringType('TrackingOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('DeliveryOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('ReputationOptions'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MatchingEventTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNSDestination'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('send'),
                        new \PHPStan\Type\Constant\ConstantStringType('reject'),
                        new \PHPStan\Type\Constant\ConstantStringType('bounce'),
                        new \PHPStan\Type\Constant\ConstantStringType('complaint'),
                        new \PHPStan\Type\Constant\ConstantStringType('delivery'),
                        new \PHPStan\Type\Constant\ConstantStringType('open'),
                        new \PHPStan\Type\Constant\ConstantStringType('click'),
                        new \PHPStan\Type\Constant\ConstantStringType('renderingFailure'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IAMRoleARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeliveryStreamARN'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DimensionConfigurations'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DimensionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('DimensionValueSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultDimensionValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('messageTag'),
                                new \PHPStan\Type\Constant\ConstantStringType('emailHeader'),
                                new \PHPStan\Type\Constant\ConstantStringType('linkTag'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicARN'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CustomRedirectDomain'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TlsPolicy'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Require'),
                        new \PHPStan\Type\Constant\ConstantStringType('Optional'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SendingEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReputationMetricsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastFreshStart'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeReceiptRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TlsPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('Recipients'),
                    new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScanEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Require'),
                        new \PHPStan\Type\Constant\ConstantStringType('Optional'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('BounceAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkmailAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('StopAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddHeaderAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNSAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectAction'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectKeyPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmtpReplyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sender'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('OrganizationArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvocationType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Event'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestResponse'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('RuleSet'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                            new \PHPStan\Type\Constant\ConstantStringType('HeaderValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Encoding'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UTF-8'),
                                new \PHPStan\Type\Constant\ConstantStringType('Base64'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAMRoleARN'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function describeReceiptRuleSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TlsPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('Recipients'),
                    new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScanEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Require'),
                        new \PHPStan\Type\Constant\ConstantStringType('Optional'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('BounceAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkmailAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('StopAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddHeaderAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNSAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectAction'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectKeyPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmtpReplyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sender'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('OrganizationArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvocationType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Event'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestResponse'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('RuleSet'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                            new \PHPStan\Type\Constant\ConstantStringType('HeaderValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Encoding'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UTF-8'),
                                new \PHPStan\Type\Constant\ConstantStringType('Base64'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAMRoleARN'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function getAccountSendingEnabled(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
            ], [
                new \PHPStan\Type\BooleanType(),
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
    private function getIdentityDkimAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DkimAttributes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DkimEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('DkimVerificationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DkimTokens'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('TemporaryFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function getIdentityMailFromDomainAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MailFromDomainAttributes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MailFromDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('MailFromDomainStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('BehaviorOnMXFailure'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('TemporaryFailure'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UseDefaultValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('RejectMessage'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getIdentityNotificationAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotificationAttributes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BounceTopic'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComplaintTopic'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryTopic'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForwardingEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('HeadersInBounceNotificationsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('HeadersInComplaintNotificationsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('HeadersInDeliveryNotificationsEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function getIdentityPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policies'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getIdentityVerificationAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VerificationAttributes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VerificationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('VerificationToken'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('TemporaryFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getSendQuota(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Max24HourSend'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxSendRate'),
                new \PHPStan\Type\Constant\ConstantStringType('SentLast24Hours'),
            ], [
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\FloatType(),
            ]),
        ]);
    }
    private function getSendStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SendDataPoints'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryAttempts'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bounces'),
                    new \PHPStan\Type\Constant\ConstantStringType('Complaints'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rejects'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
            ]),
        ]);
    }
    private function getTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Template'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubjectPart'),
                    new \PHPStan\Type\Constant\ConstantStringType('TextPart'),
                    new \PHPStan\Type\Constant\ConstantStringType('HtmlPart'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIdentities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Identities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIdentityPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyNames'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listReceiptFilters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Filters'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpFilter'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Block'),
                            new \PHPStan\Type\Constant\ConstantStringType('Allow'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listReceiptRuleSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RuleSets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TemplatesMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listVerifiedEmailAddresses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VerifiedEmailAddresses'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function putConfigurationSetDeliveryOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putIdentityPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function reorderReceiptRuleSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function sendBounce(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function sendBulkTemplatedEmail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                    new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                        new \PHPStan\Type\Constant\ConstantStringType('MessageRejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('MailFromDomainNotVerified'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetDoesNotExist'),
                        new \PHPStan\Type\Constant\ConstantStringType('TemplateDoesNotExist'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountSuspended'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountThrottled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountDailyQuotaExceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidSendingPoolName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountSendingPaused'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetSendingPaused'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidParameterValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransientFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function sendRawEmail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function sendTemplatedEmail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function setActiveReceiptRuleSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function setIdentityDkimEnabled(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function setIdentityFeedbackForwardingEnabled(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function setIdentityHeadersInNotificationsEnabled(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function setIdentityMailFromDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function setIdentityNotificationTopic(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function setReceiptRulePosition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function testRenderTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RenderedTemplate'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateAccountSendingEnabled(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateConfigurationSetEventDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateConfigurationSetReputationMetricsEnabled(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateConfigurationSetSendingEnabled(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateConfigurationSetTrackingOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateCustomVerificationEmailTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateReceiptRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function verifyDomainDkim(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DkimTokens'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function verifyDomainIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VerificationToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function verifyEmailAddress(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function verifyEmailIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}