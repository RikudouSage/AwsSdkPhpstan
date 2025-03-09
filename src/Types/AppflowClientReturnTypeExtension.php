<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class AppflowClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Appflow\AppflowClient>
     */
    public function getClass(): string
    {
        return \Aws\Appflow\AppflowClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelFlowExecutions',
            'createConnectorProfile',
            'createFlow',
            'deleteConnectorProfile',
            'deleteFlow',
            'describeConnector',
            'describeConnectorEntity',
            'describeConnectorProfiles',
            'describeConnectors',
            'describeFlow',
            'describeFlowExecutionRecords',
            'listConnectorEntities',
            'listConnectors',
            'listFlows',
            'listTagsForResource',
            'registerConnector',
            'resetConnectorMetadataCache',
            'startFlow',
            'stopFlow',
            'tagResource',
            'unregisterConnector',
            'untagResource',
            'updateConnectorProfile',
            'updateConnectorRegistration',
            'updateFlow',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelFlowExecutions' => $this->cancelFlowExecutions(),
            'createConnectorProfile' => $this->createConnectorProfile(),
            'createFlow' => $this->createFlow(),
            'deleteConnectorProfile' => $this->deleteConnectorProfile(),
            'deleteFlow' => $this->deleteFlow(),
            'describeConnector' => $this->describeConnector(),
            'describeConnectorEntity' => $this->describeConnectorEntity(),
            'describeConnectorProfiles' => $this->describeConnectorProfiles(),
            'describeConnectors' => $this->describeConnectors(),
            'describeFlow' => $this->describeFlow(),
            'describeFlowExecutionRecords' => $this->describeFlowExecutionRecords(),
            'listConnectorEntities' => $this->listConnectorEntities(),
            'listConnectors' => $this->listConnectors(),
            'listFlows' => $this->listFlows(),
            'listTagsForResource' => $this->listTagsForResource(),
            'registerConnector' => $this->registerConnector(),
            'resetConnectorMetadataCache' => $this->resetConnectorMetadataCache(),
            'startFlow' => $this->startFlow(),
            'stopFlow' => $this->stopFlow(),
            'tagResource' => $this->tagResource(),
            'unregisterConnector' => $this->unregisterConnector(),
            'untagResource' => $this->untagResource(),
            'updateConnectorProfile' => $this->updateConnectorProfile(),
            'updateConnectorRegistration' => $this->updateConnectorRegistration(),
            'updateFlow' => $this->updateFlow(),
        };
    }
    private function cancelFlowExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('invalidExecutions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createConnectorProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectorProfileArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('flowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('flowStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deprecated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Draft'),
                    new \PHPStan\Type\Constant\ConstantStringType('Errored'),
                    new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                ]),
            ]),
        ]);
    }
    private function deleteConnectorProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectorConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('canUseAsSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('canUseAsDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedDestinationConnectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedSchedulingFrequencies'),
                    new \PHPStan\Type\Constant\ConstantStringType('isPrivateLinkEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('isPrivateLinkEndpointUrlRequired'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedTriggerTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorModes'),
                    new \PHPStan\Type\Constant\ConstantStringType('authenticationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorRuntimeSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedApiVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedOperators'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedWriteOperations'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorProvisioningType'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorProvisioningConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('logoURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedDataTransferTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedDataTransferApis'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redshift'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Googleanalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('Servicenow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                        new \PHPStan\Type\Constant\ConstantStringType('Snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Infornexus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookoutMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Upsolver'),
                        new \PHPStan\Type\Constant\ConstantStringType('Honeycode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerProfiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BYMINUTE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOURLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEEKLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONCE'),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Scheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Event'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnDemand'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('GoogleAnalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('InforNexus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redshift'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceNow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                        new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('Upsolver'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerProfiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('Honeycode'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('oAuthScopes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('oAuthScopes'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataTransferApis'),
                            new \PHPStan\Type\Constant\ConstantStringType('oauth2GrantTypesSupported'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('BULKV2'),
                                new \PHPStan\Type\Constant\ConstantStringType('REST_SYNC'),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CLIENT_CREDENTIALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZATION_CODE'),
                                new \PHPStan\Type\Constant\ConstantStringType('JWT_BEARER'),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('oAuthScopes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('supportedRegions'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('oAuthScopes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('oAuthScopes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redshift'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Googleanalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('Servicenow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                        new \PHPStan\Type\Constant\ConstantStringType('Snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Infornexus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookoutMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Upsolver'),
                        new \PHPStan\Type\Constant\ConstantStringType('Honeycode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerProfiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('isBasicAuthSupported'),
                        new \PHPStan\Type\Constant\ConstantStringType('isApiKeyAuthSupported'),
                        new \PHPStan\Type\Constant\ConstantStringType('isOAuth2Supported'),
                        new \PHPStan\Type\Constant\ConstantStringType('isCustomAuthSupported'),
                        new \PHPStan\Type\Constant\ConstantStringType('oAuth2Defaults'),
                        new \PHPStan\Type\Constant\ConstantStringType('customAuthConfigs'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('oauthScopes'),
                            new \PHPStan\Type\Constant\ConstantStringType('tokenUrls'),
                            new \PHPStan\Type\Constant\ConstantStringType('authCodeUrls'),
                            new \PHPStan\Type\Constant\ConstantStringType('oauth2GrantTypesSupported'),
                            new \PHPStan\Type\Constant\ConstantStringType('oauth2CustomProperties'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CLIENT_CREDENTIALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZATION_CODE'),
                                new \PHPStan\Type\Constant\ConstantStringType('JWT_BEARER'),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('isRequired'),
                                new \PHPStan\Type\Constant\ConstantStringType('label'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('isSensitiveField'),
                                new \PHPStan\Type\Constant\ConstantStringType('connectorSuppliedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TOKEN_URL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTH_URL'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('customAuthenticationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('authParameters'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('isRequired'),
                                new \PHPStan\Type\Constant\ConstantStringType('label'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('isSensitiveField'),
                                new \PHPStan\Type\Constant\ConstantStringType('connectorSuppliedValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('isRequired'),
                        new \PHPStan\Type\Constant\ConstantStringType('label'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('scope'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectorSuppliedValueOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                        new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL_TO'),
                        new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL_TO'),
                        new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUAL_TO'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                        new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                        new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RECORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('FILE'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeConnectorEntity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectorEntityFields'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('parentIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('label'),
                    new \PHPStan\Type\Constant\ConstantStringType('isPrimaryKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('isDeprecated'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedFieldTypeDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('customProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('v1'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fieldType'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterOperators'),
                            new \PHPStan\Type\Constant\ConstantStringType('supportedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('valueRegexPattern'),
                            new \PHPStan\Type\Constant\ConstantStringType('supportedDateFormat'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldValueRange'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldLengthRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUAL_TO'),
                                new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                                new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                                new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                                new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                                new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('maximum'),
                                new \PHPStan\Type\Constant\ConstantStringType('minimum'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('maximum'),
                                new \PHPStan\Type\Constant\ConstantStringType('minimum'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('isRetrievable'),
                        new \PHPStan\Type\Constant\ConstantStringType('isQueryable'),
                        new \PHPStan\Type\Constant\ConstantStringType('isTimestampFieldForIncrementalQueries'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('isCreatable'),
                        new \PHPStan\Type\Constant\ConstantStringType('isNullable'),
                        new \PHPStan\Type\Constant\ConstantStringType('isUpsertable'),
                        new \PHPStan\Type\Constant\ConstantStringType('isUpdatable'),
                        new \PHPStan\Type\Constant\ConstantStringType('isDefaultedOnCreate'),
                        new \PHPStan\Type\Constant\ConstantStringType('supportedWriteOperations'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPSERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function describeConnectorProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectorProfileDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentialsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorProfileProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('privateConnectionProvisioningState'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redshift'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Googleanalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('Servicenow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                        new \PHPStan\Type\Constant\ConstantStringType('Snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Infornexus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookoutMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Upsolver'),
                        new \PHPStan\Type\Constant\ConstantStringType('Honeycode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerProfiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Public'),
                        new \PHPStan\Type\Constant\ConstantStringType('Private'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('GoogleAnalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Honeycode'),
                        new \PHPStan\Type\Constant\ConstantStringType('InforNexus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redshift'),
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceNow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                        new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('instanceUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('instanceUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('instanceUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('instanceUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('databaseUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataApiRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('isRedshiftServerless'),
                            new \PHPStan\Type\Constant\ConstantStringType('clusterIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('instanceUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('isSandboxEnvironment'),
                            new \PHPStan\Type\Constant\ConstantStringType('usePrivateLinkForMetadataAndAuthorization'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('instanceUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('instanceUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('warehouse'),
                            new \PHPStan\Type\Constant\ConstantStringType('stage'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('privateLinkServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('accountName'),
                            new \PHPStan\Type\Constant\ConstantStringType('region'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('instanceUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('instanceUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('applicationHostUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('applicationServicePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('portNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('clientNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('logonLanguage'),
                            new \PHPStan\Type\Constant\ConstantStringType('privateLinkServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('oAuthProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('disableSSO'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tokenUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('authCodeUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('oAuthScopes'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('profileProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('oAuth2Properties'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tokenUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('oAuth2GrantType'),
                                new \PHPStan\Type\Constant\ConstantStringType('tokenUrlCustomProperties'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CLIENT_CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZATION_CODE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JWT_BEARER'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('instanceUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('isSandboxEnvironment'),
                            new \PHPStan\Type\Constant\ConstantStringType('businessUnitId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureCause'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTOR_AUTHENTICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTOR_SERVER'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeConnectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectorConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('connectors'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                    new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                    new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                    new \PHPStan\Type\Constant\ConstantStringType('Redshift'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                    new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Googleanalytics'),
                    new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                    new \PHPStan\Type\Constant\ConstantStringType('Servicenow'),
                    new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                    new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                    new \PHPStan\Type\Constant\ConstantStringType('Snowflake'),
                    new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                    new \PHPStan\Type\Constant\ConstantStringType('Infornexus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                    new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                    new \PHPStan\Type\Constant\ConstantStringType('LookoutMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('Upsolver'),
                    new \PHPStan\Type\Constant\ConstantStringType('Honeycode'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerProfiles'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomConnector'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                ]), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('canUseAsSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('canUseAsDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedDestinationConnectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedSchedulingFrequencies'),
                    new \PHPStan\Type\Constant\ConstantStringType('isPrivateLinkEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('isPrivateLinkEndpointUrlRequired'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedTriggerTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorModes'),
                    new \PHPStan\Type\Constant\ConstantStringType('authenticationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorRuntimeSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedApiVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedOperators'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedWriteOperations'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorProvisioningType'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorProvisioningConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('logoURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedDataTransferTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedDataTransferApis'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redshift'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Googleanalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('Servicenow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                        new \PHPStan\Type\Constant\ConstantStringType('Snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Infornexus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookoutMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Upsolver'),
                        new \PHPStan\Type\Constant\ConstantStringType('Honeycode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerProfiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BYMINUTE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOURLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEEKLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONCE'),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Scheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Event'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnDemand'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('GoogleAnalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('InforNexus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redshift'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceNow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                        new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('Upsolver'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerProfiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('Honeycode'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('oAuthScopes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('oAuthScopes'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataTransferApis'),
                            new \PHPStan\Type\Constant\ConstantStringType('oauth2GrantTypesSupported'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('BULKV2'),
                                new \PHPStan\Type\Constant\ConstantStringType('REST_SYNC'),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CLIENT_CREDENTIALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZATION_CODE'),
                                new \PHPStan\Type\Constant\ConstantStringType('JWT_BEARER'),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('oAuthScopes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('supportedRegions'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('oAuthScopes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('oAuthScopes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redshift'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Googleanalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('Servicenow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                        new \PHPStan\Type\Constant\ConstantStringType('Snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Infornexus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookoutMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Upsolver'),
                        new \PHPStan\Type\Constant\ConstantStringType('Honeycode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerProfiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('isBasicAuthSupported'),
                        new \PHPStan\Type\Constant\ConstantStringType('isApiKeyAuthSupported'),
                        new \PHPStan\Type\Constant\ConstantStringType('isOAuth2Supported'),
                        new \PHPStan\Type\Constant\ConstantStringType('isCustomAuthSupported'),
                        new \PHPStan\Type\Constant\ConstantStringType('oAuth2Defaults'),
                        new \PHPStan\Type\Constant\ConstantStringType('customAuthConfigs'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('oauthScopes'),
                            new \PHPStan\Type\Constant\ConstantStringType('tokenUrls'),
                            new \PHPStan\Type\Constant\ConstantStringType('authCodeUrls'),
                            new \PHPStan\Type\Constant\ConstantStringType('oauth2GrantTypesSupported'),
                            new \PHPStan\Type\Constant\ConstantStringType('oauth2CustomProperties'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CLIENT_CREDENTIALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZATION_CODE'),
                                new \PHPStan\Type\Constant\ConstantStringType('JWT_BEARER'),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('isRequired'),
                                new \PHPStan\Type\Constant\ConstantStringType('label'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('isSensitiveField'),
                                new \PHPStan\Type\Constant\ConstantStringType('connectorSuppliedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TOKEN_URL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTH_URL'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('customAuthenticationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('authParameters'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('isRequired'),
                                new \PHPStan\Type\Constant\ConstantStringType('label'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('isSensitiveField'),
                                new \PHPStan\Type\Constant\ConstantStringType('connectorSuppliedValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('isRequired'),
                        new \PHPStan\Type\Constant\ConstantStringType('label'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('scope'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectorSuppliedValueOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                        new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL_TO'),
                        new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL_TO'),
                        new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUAL_TO'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                        new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                        new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RECORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('FILE'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('applicationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorProvisioningType'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorModes'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedDataTransferTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redshift'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Googleanalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('Servicenow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                        new \PHPStan\Type\Constant\ConstantStringType('Snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Infornexus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookoutMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Upsolver'),
                        new \PHPStan\Type\Constant\ConstantStringType('Honeycode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerProfiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RECORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('FILE'),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('flowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('flowName'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsArn'),
                new \PHPStan\Type\Constant\ConstantStringType('flowStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('flowStatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceFlowConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('destinationFlowConfigList'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunExecutionDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('triggerConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('tasks'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('metadataCatalogConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunMetadataCatalogDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('schemaVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deprecated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Draft'),
                    new \PHPStan\Type\Constant\ConstantStringType('Errored'),
                    new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceConnectorProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('incrementalPullConfig'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redshift'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Googleanalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('Servicenow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                        new \PHPStan\Type\Constant\ConstantStringType('Snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Infornexus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookoutMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Upsolver'),
                        new \PHPStan\Type\Constant\ConstantStringType('Honeycode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerProfiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('GoogleAnalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('InforNexus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceNow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                        new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3InputFormatConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('s3InputFileType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                            new \PHPStan\Type\Constant\ConstantStringType('enableDynamicFieldUpdate'),
                            new \PHPStan\Type\Constant\ConstantStringType('includeDeletedRecords'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataTransferApi'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('BULKV2'),
                                new \PHPStan\Type\Constant\ConstantStringType('REST_SYNC'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                            new \PHPStan\Type\Constant\ConstantStringType('documentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('includeSourceFiles'),
                            new \PHPStan\Type\Constant\ConstantStringType('includeRenditions'),
                            new \PHPStan\Type\Constant\ConstantStringType('includeAllVersions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('objectPath'),
                            new \PHPStan\Type\Constant\ConstantStringType('parallelismConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('paginationConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('maxParallelism'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('maxPageSize'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entityName'),
                            new \PHPStan\Type\Constant\ConstantStringType('customProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataTransferApi'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASYNC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('datetimeTypeFieldName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationConnectorProperties'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redshift'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Googleanalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('Servicenow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                        new \PHPStan\Type\Constant\ConstantStringType('Snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Infornexus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookoutMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Upsolver'),
                        new \PHPStan\Type\Constant\ConstantStringType('Honeycode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerProfiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Redshift'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('Snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookoutMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Upsolver'),
                        new \PHPStan\Type\Constant\ConstantStringType('Honeycode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerProfiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                            new \PHPStan\Type\Constant\ConstantStringType('intermediateBucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorHandlingConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('failOnFirstDestinationError'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3OutputFormatConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefixConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('aggregationConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('preserveSourceDataTyping'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('prefixType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prefixFormat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pathPrefixHierarchy'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FILENAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATH_AND_FILENAME'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('YEAR'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_ID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SCHEMA_VERSION'),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('aggregationType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('targetFileSize'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('None'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SingleFile'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                            new \PHPStan\Type\Constant\ConstantStringType('idFieldNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorHandlingConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('writeOperationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataTransferApi'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('failOnFirstDestinationError'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPSERT'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('BULKV2'),
                                new \PHPStan\Type\Constant\ConstantStringType('REST_SYNC'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                            new \PHPStan\Type\Constant\ConstantStringType('intermediateBucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorHandlingConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('failOnFirstDestinationError'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorHandlingConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('failOnFirstDestinationError'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3OutputFormatConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefixConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('aggregationConfig'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('prefixType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prefixFormat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pathPrefixHierarchy'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FILENAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATH_AND_FILENAME'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('YEAR'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_ID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SCHEMA_VERSION'),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('aggregationType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('targetFileSize'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('None'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SingleFile'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorHandlingConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('failOnFirstDestinationError'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('objectTypeName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                            new \PHPStan\Type\Constant\ConstantStringType('idFieldNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorHandlingConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('writeOperationType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('failOnFirstDestinationError'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPSERT'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('object'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorHandlingConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('failOnFirstDestinationError'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entityName'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorHandlingConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('writeOperationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('idFieldNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('customProperties'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('failOnFirstDestinationError'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPSERT'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('objectPath'),
                            new \PHPStan\Type\Constant\ConstantStringType('successResponseHandlingConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('idFieldNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorHandlingConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('writeOperationType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('failOnFirstDestinationError'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPSERT'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('mostRecentExecutionMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('mostRecentExecutionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('mostRecentExecutionStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Error'),
                        new \PHPStan\Type\Constant\ConstantStringType('CancelStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('triggerType'),
                    new \PHPStan\Type\Constant\ConstantStringType('triggerProperties'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Scheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Event'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnDemand'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Scheduled'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scheduleExpression'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataPullMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduleStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduleEndTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('timezone'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduleOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('firstExecutionFrom'),
                            new \PHPStan\Type\Constant\ConstantStringType('flowErrorDeactivationThreshold'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Incremental'),
                                new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('sourceFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorOperator'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationField'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskType'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskProperties'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('GoogleAnalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('InforNexus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceNow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                        new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_OP'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBTRACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_FIRST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASK_LAST_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_ZERO'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NON_NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATE_NUMERIC'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arithmetic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                        new \PHPStan\Type\Constant\ConstantStringType('Map'),
                        new \PHPStan\Type\Constant\ConstantStringType('Map_all'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mask'),
                        new \PHPStan\Type\Constant\ConstantStringType('Merge'),
                        new \PHPStan\Type\Constant\ConstantStringType('Passthrough'),
                        new \PHPStan\Type\Constant\ConstantStringType('Truncate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Validate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Partition'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALUES'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATA_TYPE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPPER_BOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOWER_BOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('SOURCE_DATA_TYPE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DESTINATION_DATA_TYPE'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ACTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('MASK_VALUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MASK_LENGTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRUNCATE_LENGTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MATH_OPERATION_FIELDS_ORDER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONCAT_FORMAT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUBFIELD_CATEGORY_MAP'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUDE_SOURCE_FIELDS_LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCLUDE_NEW_FIELDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORDERED_PARTITION_KEYS_LIST'),
                    ]), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('glueDataCatalog'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('tablePrefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('catalogType'),
                    new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('tableRegistrationOutput'),
                    new \PHPStan\Type\Constant\ConstantStringType('partitionRegistrationOutput'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('GLUE'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('result'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                            new \PHPStan\Type\Constant\ConstantStringType('Error'),
                            new \PHPStan\Type\Constant\ConstantStringType('CancelStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('result'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                            new \PHPStan\Type\Constant\ConstantStringType('Error'),
                            new \PHPStan\Type\Constant\ConstantStringType('CancelStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeFlowExecutionRecords(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('flowExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('executionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataPullStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataPullEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadataCatalogDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Error'),
                        new \PHPStan\Type\Constant\ConstantStringType('CancelStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('bytesProcessed'),
                        new \PHPStan\Type\Constant\ConstantStringType('bytesWritten'),
                        new \PHPStan\Type\Constant\ConstantStringType('recordsProcessed'),
                        new \PHPStan\Type\Constant\ConstantStringType('numParallelProcesses'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxPageSize'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('putFailuresCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionMessage'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('catalogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('tableRegistrationOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('partitionRegistrationOutput'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('GLUE'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('result'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                                new \PHPStan\Type\Constant\ConstantStringType('CancelStarted'),
                                new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('result'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                                new \PHPStan\Type\Constant\ConstantStringType('CancelStarted'),
                                new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                            ]),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listConnectorEntities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectorEntityMap'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('label'),
                    new \PHPStan\Type\Constant\ConstantStringType('hasNestedEntities'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]))),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listConnectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectors'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('applicationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorProvisioningType'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorModes'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedDataTransferTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redshift'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Googleanalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('Servicenow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                        new \PHPStan\Type\Constant\ConstantStringType('Snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Infornexus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookoutMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Upsolver'),
                        new \PHPStan\Type\Constant\ConstantStringType('Honeycode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerProfiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RECORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('FILE'),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFlows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('flows'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('flowArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('flowName'),
                    new \PHPStan\Type\Constant\ConstantStringType('flowStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceConnectorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceConnectorLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationConnectorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationConnectorLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('triggerType'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRunExecutionDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deprecated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Draft'),
                        new \PHPStan\Type\Constant\ConstantStringType('Errored'),
                        new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redshift'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Googleanalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('Servicenow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                        new \PHPStan\Type\Constant\ConstantStringType('Snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Infornexus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookoutMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Upsolver'),
                        new \PHPStan\Type\Constant\ConstantStringType('Honeycode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerProfiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                        new \PHPStan\Type\Constant\ConstantStringType('Singular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redshift'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Googleanalytics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                        new \PHPStan\Type\Constant\ConstantStringType('Servicenow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Trendmicro'),
                        new \PHPStan\Type\Constant\ConstantStringType('Snowflake'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Infornexus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Amplitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Veeva'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookoutMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Upsolver'),
                        new \PHPStan\Type\Constant\ConstantStringType('Honeycode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerProfiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPOData'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pardot'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Scheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Event'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnDemand'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('mostRecentExecutionMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('mostRecentExecutionTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('mostRecentExecutionStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                            new \PHPStan\Type\Constant\ConstantStringType('Error'),
                            new \PHPStan\Type\Constant\ConstantStringType('CancelStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                        ]),
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
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function registerConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function resetConnectorMetadataCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('flowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('flowStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('executionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deprecated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Draft'),
                    new \PHPStan\Type\Constant\ConstantStringType('Errored'),
                    new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('flowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('flowStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deprecated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Draft'),
                    new \PHPStan\Type\Constant\ConstantStringType('Errored'),
                    new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
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
    private function unregisterConnector(): ?\PHPStan\Type\Type
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
    private function updateConnectorProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectorProfileArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateConnectorRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('flowStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deprecated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Draft'),
                    new \PHPStan\Type\Constant\ConstantStringType('Errored'),
                    new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                ]),
            ]),
        ]);
    }
}