<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ChatbotClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Chatbot\ChatbotClient>
     */
    public function getClass(): string
    {
        return \Aws\Chatbot\ChatbotClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateToConfiguration',
            'createChimeWebhookConfiguration',
            'createCustomAction',
            'createMicrosoftTeamsChannelConfiguration',
            'createSlackChannelConfiguration',
            'deleteChimeWebhookConfiguration',
            'deleteCustomAction',
            'deleteMicrosoftTeamsChannelConfiguration',
            'deleteMicrosoftTeamsConfiguredTeam',
            'deleteMicrosoftTeamsUserIdentity',
            'deleteSlackChannelConfiguration',
            'deleteSlackUserIdentity',
            'deleteSlackWorkspaceAuthorization',
            'describeChimeWebhookConfigurations',
            'describeSlackChannelConfigurations',
            'describeSlackUserIdentities',
            'describeSlackWorkspaces',
            'disassociateFromConfiguration',
            'getAccountPreferences',
            'getCustomAction',
            'getMicrosoftTeamsChannelConfiguration',
            'listAssociations',
            'listCustomActions',
            'listMicrosoftTeamsChannelConfigurations',
            'listMicrosoftTeamsConfiguredTeams',
            'listMicrosoftTeamsUserIdentities',
            'listTagsForResource',
            'tagResource',
            'untagResource',
            'updateAccountPreferences',
            'updateChimeWebhookConfiguration',
            'updateCustomAction',
            'updateMicrosoftTeamsChannelConfiguration',
            'updateSlackChannelConfiguration',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateToConfiguration' => $this->associateToConfiguration(),
            'createChimeWebhookConfiguration' => $this->createChimeWebhookConfiguration(),
            'createCustomAction' => $this->createCustomAction(),
            'createMicrosoftTeamsChannelConfiguration' => $this->createMicrosoftTeamsChannelConfiguration(),
            'createSlackChannelConfiguration' => $this->createSlackChannelConfiguration(),
            'deleteChimeWebhookConfiguration' => $this->deleteChimeWebhookConfiguration(),
            'deleteCustomAction' => $this->deleteCustomAction(),
            'deleteMicrosoftTeamsChannelConfiguration' => $this->deleteMicrosoftTeamsChannelConfiguration(),
            'deleteMicrosoftTeamsConfiguredTeam' => $this->deleteMicrosoftTeamsConfiguredTeam(),
            'deleteMicrosoftTeamsUserIdentity' => $this->deleteMicrosoftTeamsUserIdentity(),
            'deleteSlackChannelConfiguration' => $this->deleteSlackChannelConfiguration(),
            'deleteSlackUserIdentity' => $this->deleteSlackUserIdentity(),
            'deleteSlackWorkspaceAuthorization' => $this->deleteSlackWorkspaceAuthorization(),
            'describeChimeWebhookConfigurations' => $this->describeChimeWebhookConfigurations(),
            'describeSlackChannelConfigurations' => $this->describeSlackChannelConfigurations(),
            'describeSlackUserIdentities' => $this->describeSlackUserIdentities(),
            'describeSlackWorkspaces' => $this->describeSlackWorkspaces(),
            'disassociateFromConfiguration' => $this->disassociateFromConfiguration(),
            'getAccountPreferences' => $this->getAccountPreferences(),
            'getCustomAction' => $this->getCustomAction(),
            'getMicrosoftTeamsChannelConfiguration' => $this->getMicrosoftTeamsChannelConfiguration(),
            'listAssociations' => $this->listAssociations(),
            'listCustomActions' => $this->listCustomActions(),
            'listMicrosoftTeamsChannelConfigurations' => $this->listMicrosoftTeamsChannelConfigurations(),
            'listMicrosoftTeamsConfiguredTeams' => $this->listMicrosoftTeamsConfiguredTeams(),
            'listMicrosoftTeamsUserIdentities' => $this->listMicrosoftTeamsUserIdentities(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAccountPreferences' => $this->updateAccountPreferences(),
            'updateChimeWebhookConfiguration' => $this->updateChimeWebhookConfiguration(),
            'updateCustomAction' => $this->updateCustomAction(),
            'updateMicrosoftTeamsChannelConfiguration' => $this->updateMicrosoftTeamsChannelConfiguration(),
            'updateSlackChannelConfiguration' => $this->updateSlackChannelConfiguration(),
        };
    }
    private function associateToConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createChimeWebhookConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WebhookConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WebhookDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createCustomAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CustomActionArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createMicrosoftTeamsChannelConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TeamId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TeamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TenantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('GuardrailPolicyArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserAuthorizationRequired'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createSlackChannelConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SlackTeamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SlackTeamId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SlackChannelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SlackChannelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('GuardrailPolicyArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserAuthorizationRequired'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteChimeWebhookConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteCustomAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteMicrosoftTeamsChannelConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteMicrosoftTeamsConfiguredTeam(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteMicrosoftTeamsUserIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSlackChannelConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSlackUserIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSlackWorkspaceAuthorization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeChimeWebhookConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('WebhookConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WebhookDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeSlackChannelConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('SlackChannelConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SlackTeamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SlackTeamId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SlackChannelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SlackChannelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('GuardrailPolicyArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserAuthorizationRequired'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeSlackUserIdentities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SlackUserIdentities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SlackTeamId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SlackUserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsUserIdentity'),
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
    private function describeSlackWorkspaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SlackWorkspaces'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SlackTeamId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SlackTeamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateFromConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAccountPreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountPreferences'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserAuthorizationRequired'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrainingDataCollectionEnabled'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getCustomAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CustomAction'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CustomActionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('AliasName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CommandText'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ButtonText'),
                        new \PHPStan\Type\Constant\ConstantStringType('Criteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('Variables'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('VariableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HAS_VALUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getMicrosoftTeamsChannelConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TeamId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TeamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TenantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('GuardrailPolicyArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserAuthorizationRequired'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Associations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCustomActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CustomActions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMicrosoftTeamsChannelConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('TeamChannelConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TeamId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TeamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TenantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('GuardrailPolicyArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserAuthorizationRequired'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listMicrosoftTeamsConfiguredTeams(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfiguredTeams'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TenantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TeamId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TeamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
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
    private function listMicrosoftTeamsUserIdentities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TeamsUserIdentities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TeamId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsUserIdentity'),
                    new \PHPStan\Type\Constant\ConstantStringType('TeamsChannelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TeamsTenantId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
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
    private function updateAccountPreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountPreferences'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserAuthorizationRequired'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrainingDataCollectionEnabled'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function updateChimeWebhookConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WebhookConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WebhookDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateCustomAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CustomActionArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateMicrosoftTeamsChannelConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TeamId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TeamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TenantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('GuardrailPolicyArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserAuthorizationRequired'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateSlackChannelConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SlackTeamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SlackTeamId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SlackChannelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SlackChannelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('GuardrailPolicyArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserAuthorizationRequired'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}