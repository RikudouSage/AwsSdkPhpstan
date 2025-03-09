<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class LambdaClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Lambda\LambdaClient>
     */
    public function getClass(): string
    {
        return \Aws\Lambda\LambdaClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addLayerVersionPermission',
            'addPermission',
            'createAlias',
            'createCodeSigningConfig',
            'createEventSourceMapping',
            'createFunction',
            'createFunctionUrlConfig',
            'deleteAlias',
            'deleteCodeSigningConfig',
            'deleteEventSourceMapping',
            'deleteFunction',
            'deleteFunctionCodeSigningConfig',
            'deleteFunctionConcurrency',
            'deleteFunctionEventInvokeConfig',
            'deleteFunctionUrlConfig',
            'deleteLayerVersion',
            'deleteProvisionedConcurrencyConfig',
            'getAccountSettings',
            'getAlias',
            'getCodeSigningConfig',
            'getEventSourceMapping',
            'getFunction',
            'getFunctionCodeSigningConfig',
            'getFunctionConcurrency',
            'getFunctionConfiguration',
            'getFunctionEventInvokeConfig',
            'getFunctionRecursionConfig',
            'getFunctionUrlConfig',
            'getLayerVersion',
            'getLayerVersionByArn',
            'getLayerVersionPolicy',
            'getPolicy',
            'getProvisionedConcurrencyConfig',
            'getRuntimeManagementConfig',
            'invoke',
            'invokeAsync',
            'invokeWithResponseStream',
            'listAliases',
            'listCodeSigningConfigs',
            'listEventSourceMappings',
            'listFunctionEventInvokeConfigs',
            'listFunctionUrlConfigs',
            'listFunctions',
            'listFunctionsByCodeSigningConfig',
            'listLayerVersions',
            'listLayers',
            'listProvisionedConcurrencyConfigs',
            'listTags',
            'listVersionsByFunction',
            'publishLayerVersion',
            'publishVersion',
            'putFunctionCodeSigningConfig',
            'putFunctionConcurrency',
            'putFunctionEventInvokeConfig',
            'putFunctionRecursionConfig',
            'putProvisionedConcurrencyConfig',
            'putRuntimeManagementConfig',
            'removeLayerVersionPermission',
            'removePermission',
            'tagResource',
            'untagResource',
            'updateAlias',
            'updateCodeSigningConfig',
            'updateEventSourceMapping',
            'updateFunctionCode',
            'updateFunctionConfiguration',
            'updateFunctionEventInvokeConfig',
            'updateFunctionUrlConfig',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addLayerVersionPermission' => $this->addLayerVersionPermission(),
            'addPermission' => $this->addPermission(),
            'createAlias' => $this->createAlias(),
            'createCodeSigningConfig' => $this->createCodeSigningConfig(),
            'createEventSourceMapping' => $this->createEventSourceMapping(),
            'createFunction' => $this->createFunction(),
            'createFunctionUrlConfig' => $this->createFunctionUrlConfig(),
            'deleteAlias' => $this->deleteAlias(),
            'deleteCodeSigningConfig' => $this->deleteCodeSigningConfig(),
            'deleteEventSourceMapping' => $this->deleteEventSourceMapping(),
            'deleteFunction' => $this->deleteFunction(),
            'deleteFunctionCodeSigningConfig' => $this->deleteFunctionCodeSigningConfig(),
            'deleteFunctionConcurrency' => $this->deleteFunctionConcurrency(),
            'deleteFunctionEventInvokeConfig' => $this->deleteFunctionEventInvokeConfig(),
            'deleteFunctionUrlConfig' => $this->deleteFunctionUrlConfig(),
            'deleteLayerVersion' => $this->deleteLayerVersion(),
            'deleteProvisionedConcurrencyConfig' => $this->deleteProvisionedConcurrencyConfig(),
            'getAccountSettings' => $this->getAccountSettings(),
            'getAlias' => $this->getAlias(),
            'getCodeSigningConfig' => $this->getCodeSigningConfig(),
            'getEventSourceMapping' => $this->getEventSourceMapping(),
            'getFunction' => $this->getFunction(),
            'getFunctionCodeSigningConfig' => $this->getFunctionCodeSigningConfig(),
            'getFunctionConcurrency' => $this->getFunctionConcurrency(),
            'getFunctionConfiguration' => $this->getFunctionConfiguration(),
            'getFunctionEventInvokeConfig' => $this->getFunctionEventInvokeConfig(),
            'getFunctionRecursionConfig' => $this->getFunctionRecursionConfig(),
            'getFunctionUrlConfig' => $this->getFunctionUrlConfig(),
            'getLayerVersion' => $this->getLayerVersion(),
            'getLayerVersionByArn' => $this->getLayerVersionByArn(),
            'getLayerVersionPolicy' => $this->getLayerVersionPolicy(),
            'getPolicy' => $this->getPolicy(),
            'getProvisionedConcurrencyConfig' => $this->getProvisionedConcurrencyConfig(),
            'getRuntimeManagementConfig' => $this->getRuntimeManagementConfig(),
            'invoke' => $this->invoke(),
            'invokeAsync' => $this->invokeAsync(),
            'invokeWithResponseStream' => $this->invokeWithResponseStream(),
            'listAliases' => $this->listAliases(),
            'listCodeSigningConfigs' => $this->listCodeSigningConfigs(),
            'listEventSourceMappings' => $this->listEventSourceMappings(),
            'listFunctionEventInvokeConfigs' => $this->listFunctionEventInvokeConfigs(),
            'listFunctionUrlConfigs' => $this->listFunctionUrlConfigs(),
            'listFunctions' => $this->listFunctions(),
            'listFunctionsByCodeSigningConfig' => $this->listFunctionsByCodeSigningConfig(),
            'listLayerVersions' => $this->listLayerVersions(),
            'listLayers' => $this->listLayers(),
            'listProvisionedConcurrencyConfigs' => $this->listProvisionedConcurrencyConfigs(),
            'listTags' => $this->listTags(),
            'listVersionsByFunction' => $this->listVersionsByFunction(),
            'publishLayerVersion' => $this->publishLayerVersion(),
            'publishVersion' => $this->publishVersion(),
            'putFunctionCodeSigningConfig' => $this->putFunctionCodeSigningConfig(),
            'putFunctionConcurrency' => $this->putFunctionConcurrency(),
            'putFunctionEventInvokeConfig' => $this->putFunctionEventInvokeConfig(),
            'putFunctionRecursionConfig' => $this->putFunctionRecursionConfig(),
            'putProvisionedConcurrencyConfig' => $this->putProvisionedConcurrencyConfig(),
            'putRuntimeManagementConfig' => $this->putRuntimeManagementConfig(),
            'removeLayerVersionPermission' => $this->removeLayerVersionPermission(),
            'removePermission' => $this->removePermission(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAlias' => $this->updateAlias(),
            'updateCodeSigningConfig' => $this->updateCodeSigningConfig(),
            'updateEventSourceMapping' => $this->updateEventSourceMapping(),
            'updateFunctionCode' => $this->updateFunctionCode(),
            'updateFunctionConfiguration' => $this->updateFunctionConfiguration(),
            'updateFunctionEventInvokeConfig' => $this->updateFunctionEventInvokeConfig(),
            'updateFunctionUrlConfig' => $this->updateFunctionUrlConfig(),
        };
    }
    private function addLayerVersionPermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Statement'),
                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function addPermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Statement'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AliasArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('RoutingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalVersionWeights'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\FloatType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCodeSigningConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CodeSigningConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSigningConfigId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSigningConfigArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedPublishers'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSigningPolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArns'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UntrustedArtifactOnDeployment'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Warn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Enforce'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createEventSourceMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UUID'),
                new \PHPStan\Type\Constant\ConstantStringType('StartingPosition'),
                new \PHPStan\Type\Constant\ConstantStringType('StartingPositionTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('BatchSize'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumBatchingWindowInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('ParallelizationFactor'),
                new \PHPStan\Type\Constant\ConstantStringType('EventSourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FilterCriteria'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                new \PHPStan\Type\Constant\ConstantStringType('LastProcessingResult'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('StateTransitionReason'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Topics'),
                new \PHPStan\Type\Constant\ConstantStringType('Queues'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceAccessConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('SelfManagedEventSource'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumRecordAgeInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('BisectBatchOnFunctionError'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumRetryAttempts'),
                new \PHPStan\Type\Constant\ConstantStringType('TumblingWindowInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionResponseTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('AmazonManagedKafkaEventSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('SelfManagedKafkaEventSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ScalingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentDBEventSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FilterCriteriaError'),
                new \PHPStan\Type\Constant\ConstantStringType('EventSourceMappingArn'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricsConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedPollerConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRIM_HORIZON'),
                    new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                    new \PHPStan\Type\Constant\ConstantStringType('AT_TIMESTAMP'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Filters'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pattern'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OnSuccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnFailure'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('URI'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BASIC_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_SUBNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_SECURITY_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('SASL_SCRAM_512_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('SASL_SCRAM_256_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIRTUAL_HOST'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLIENT_CERTIFICATE_TLS_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVER_ROOT_CA_CERTIFICATE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\Constant\ConstantStringType('KAFKA_BOOTSTRAP_SERVERS'), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ]))),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReportBatchItemFailures'),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerGroupId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerGroupId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MaximumConcurrency'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CollectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FullDocument'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateLookup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Default'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EventCount'),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MinimumPollers'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaximumPollers'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FunctionName'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                new \PHPStan\Type\Constant\ConstantStringType('Role'),
                new \PHPStan\Type\Constant\ConstantStringType('Handler'),
                new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                new \PHPStan\Type\Constant\ConstantStringType('MemorySize'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                new \PHPStan\Type\Constant\ConstantStringType('CodeSha256'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('DeadLetterConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TracingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('MasterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('Layers'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                new \PHPStan\Type\Constant\ConstantStringType('StateReasonCode'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatusReasonCode'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                new \PHPStan\Type\Constant\ConstantStringType('ImageConfigResponse'),
                new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Architectures'),
                new \PHPStan\Type\Constant\ConstantStringType('EphemeralStorage'),
                new \PHPStan\Type\Constant\ConstantStringType('SnapStart'),
                new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('LoggingConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs6.10'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs8.10'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs10.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs12.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs14.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs16.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('java8'),
                    new \PHPStan\Type\Constant\ConstantStringType('java8.al2'),
                    new \PHPStan\Type\Constant\ConstantStringType('java11'),
                    new \PHPStan\Type\Constant\ConstantStringType('python2.7'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.6'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.7'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.8'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.9'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore1.0'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.0'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.1'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore3.1'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnet6'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnet8'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3-edge'),
                    new \PHPStan\Type\Constant\ConstantStringType('go1.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby2.5'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby2.7'),
                    new \PHPStan\Type\Constant\ConstantStringType('provided'),
                    new \PHPStan\Type\Constant\ConstantStringType('provided.al2'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs18.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.10'),
                    new \PHPStan\Type\Constant\ConstantStringType('java17'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby3.2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby3.3'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.11'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs20.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('provided.al2023'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.12'),
                    new \PHPStan\Type\Constant\ConstantStringType('java21'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.13'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs22.x'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6AllowedForDualStack'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Variables'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('PassThrough'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Idle'),
                    new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Restoring'),
                    new \PHPStan\Type\Constant\ConstantStringType('EniLimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('InsufficientRolePermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetOutOfIPAddresses'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSubnet'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSecurityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageDeleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidImage'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidStateKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSIOError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountConnectivityError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidRuntime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidZipFileException'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EniLimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('InsufficientRolePermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetOutOfIPAddresses'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSubnet'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSecurityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageDeleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidImage'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidStateKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSIOError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountConnectivityError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidRuntime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidZipFileException'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalMountPath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Zip'),
                    new \PHPStan\Type\Constant\ConstantStringType('Image'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ImageConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EntryPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Command'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('arm64'),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplyOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptimizationStatus'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PublishedVersions'),
                        new \PHPStan\Type\Constant\ConstantStringType('None'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('On'),
                        new \PHPStan\Type\Constant\ConstantStringType('Off'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationLogLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('SystemLogLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('FATAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createFunctionUrlConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FunctionUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthType'),
                new \PHPStan\Type\Constant\ConstantStringType('Cors'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('InvokeMode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllowCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowMethods'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowOrigins'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExposeHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAge'),
                ], [
                    new \PHPStan\Type\BooleanType(),
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
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BUFFERED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESPONSE_STREAM'),
                ]),
            ]),
        ]);
    }
    private function deleteAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCodeSigningConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEventSourceMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UUID'),
                new \PHPStan\Type\Constant\ConstantStringType('StartingPosition'),
                new \PHPStan\Type\Constant\ConstantStringType('StartingPositionTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('BatchSize'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumBatchingWindowInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('ParallelizationFactor'),
                new \PHPStan\Type\Constant\ConstantStringType('EventSourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FilterCriteria'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                new \PHPStan\Type\Constant\ConstantStringType('LastProcessingResult'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('StateTransitionReason'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Topics'),
                new \PHPStan\Type\Constant\ConstantStringType('Queues'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceAccessConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('SelfManagedEventSource'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumRecordAgeInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('BisectBatchOnFunctionError'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumRetryAttempts'),
                new \PHPStan\Type\Constant\ConstantStringType('TumblingWindowInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionResponseTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('AmazonManagedKafkaEventSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('SelfManagedKafkaEventSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ScalingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentDBEventSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FilterCriteriaError'),
                new \PHPStan\Type\Constant\ConstantStringType('EventSourceMappingArn'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricsConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedPollerConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRIM_HORIZON'),
                    new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                    new \PHPStan\Type\Constant\ConstantStringType('AT_TIMESTAMP'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Filters'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pattern'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OnSuccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnFailure'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('URI'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BASIC_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_SUBNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_SECURITY_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('SASL_SCRAM_512_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('SASL_SCRAM_256_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIRTUAL_HOST'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLIENT_CERTIFICATE_TLS_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVER_ROOT_CA_CERTIFICATE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\Constant\ConstantStringType('KAFKA_BOOTSTRAP_SERVERS'), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ]))),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReportBatchItemFailures'),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerGroupId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerGroupId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MaximumConcurrency'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CollectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FullDocument'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateLookup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Default'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EventCount'),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MinimumPollers'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaximumPollers'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function deleteFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteFunctionCodeSigningConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteFunctionConcurrency(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteFunctionEventInvokeConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteFunctionUrlConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteLayerVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteProvisionedConcurrencyConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getAccountSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountLimit'),
                new \PHPStan\Type\Constant\ConstantStringType('AccountUsage'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TotalCodeSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSizeUnzipped'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSizeZipped'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConcurrentExecutions'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnreservedConcurrentExecutions'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TotalCodeSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionCount'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AliasArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('RoutingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalVersionWeights'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\FloatType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCodeSigningConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CodeSigningConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSigningConfigId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSigningConfigArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedPublishers'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSigningPolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArns'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UntrustedArtifactOnDeployment'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Warn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Enforce'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getEventSourceMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UUID'),
                new \PHPStan\Type\Constant\ConstantStringType('StartingPosition'),
                new \PHPStan\Type\Constant\ConstantStringType('StartingPositionTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('BatchSize'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumBatchingWindowInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('ParallelizationFactor'),
                new \PHPStan\Type\Constant\ConstantStringType('EventSourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FilterCriteria'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                new \PHPStan\Type\Constant\ConstantStringType('LastProcessingResult'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('StateTransitionReason'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Topics'),
                new \PHPStan\Type\Constant\ConstantStringType('Queues'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceAccessConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('SelfManagedEventSource'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumRecordAgeInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('BisectBatchOnFunctionError'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumRetryAttempts'),
                new \PHPStan\Type\Constant\ConstantStringType('TumblingWindowInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionResponseTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('AmazonManagedKafkaEventSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('SelfManagedKafkaEventSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ScalingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentDBEventSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FilterCriteriaError'),
                new \PHPStan\Type\Constant\ConstantStringType('EventSourceMappingArn'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricsConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedPollerConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRIM_HORIZON'),
                    new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                    new \PHPStan\Type\Constant\ConstantStringType('AT_TIMESTAMP'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Filters'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pattern'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OnSuccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnFailure'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('URI'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BASIC_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_SUBNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_SECURITY_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('SASL_SCRAM_512_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('SASL_SCRAM_256_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIRTUAL_HOST'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLIENT_CERTIFICATE_TLS_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVER_ROOT_CA_CERTIFICATE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\Constant\ConstantStringType('KAFKA_BOOTSTRAP_SERVERS'), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ]))),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReportBatchItemFailures'),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerGroupId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerGroupId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MaximumConcurrency'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CollectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FullDocument'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateLookup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Default'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EventCount'),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MinimumPollers'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaximumPollers'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('TagsError'),
                new \PHPStan\Type\Constant\ConstantStringType('Concurrency'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Role'),
                    new \PHPStan\Type\Constant\ConstantStringType('Handler'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemorySize'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeadLetterConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TracingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Layers'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReasonCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatusReasonCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileSystemConfigs'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageConfigResponse'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Architectures'),
                    new \PHPStan\Type\Constant\ConstantStringType('EphemeralStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapStart'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs6.10'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs8.10'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs10.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs12.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs14.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs16.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('java8'),
                        new \PHPStan\Type\Constant\ConstantStringType('java8.al2'),
                        new \PHPStan\Type\Constant\ConstantStringType('java11'),
                        new \PHPStan\Type\Constant\ConstantStringType('python2.7'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.6'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.7'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.8'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.9'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnetcore1.0'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.0'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.1'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnetcore3.1'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnet6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnet8'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3-edge'),
                        new \PHPStan\Type\Constant\ConstantStringType('go1.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby2.5'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby2.7'),
                        new \PHPStan\Type\Constant\ConstantStringType('provided'),
                        new \PHPStan\Type\Constant\ConstantStringType('provided.al2'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs18.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.10'),
                        new \PHPStan\Type\Constant\ConstantStringType('java17'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby3.2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby3.3'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.11'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs20.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('provided.al2023'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.12'),
                        new \PHPStan\Type\Constant\ConstantStringType('java21'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.13'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs22.x'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6AllowedForDualStack'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Variables'),
                        new \PHPStan\Type\Constant\ConstantStringType('Error'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('PassThrough'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Idle'),
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Restoring'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniLimitExceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsufficientRolePermissions'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetOutOfIPAddresses'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidSubnet'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidSecurityGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageDeleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageAccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidImage'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyAccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyNotFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidStateKMSKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisabledKMSKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('EFSIOError'),
                        new \PHPStan\Type\Constant\ConstantStringType('EFSMountConnectivityError'),
                        new \PHPStan\Type\Constant\ConstantStringType('EFSMountFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('EFSMountTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRuntime'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidZipFileException'),
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EniLimitExceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsufficientRolePermissions'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetOutOfIPAddresses'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidSubnet'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidSecurityGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageDeleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageAccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidImage'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyAccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyNotFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidStateKMSKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisabledKMSKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('EFSIOError'),
                        new \PHPStan\Type\Constant\ConstantStringType('EFSMountConnectivityError'),
                        new \PHPStan\Type\Constant\ConstantStringType('EFSMountFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('EFSMountTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRuntime'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidZipFileException'),
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocalMountPath'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Zip'),
                        new \PHPStan\Type\Constant\ConstantStringType('Image'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ImageConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('Error'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EntryPoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('Command'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('x86_64'),
                            new \PHPStan\Type\Constant\ConstantStringType('arm64'),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplyOn'),
                        new \PHPStan\Type\Constant\ConstantStringType('OptimizationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PublishedVersions'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('On'),
                            new \PHPStan\Type\Constant\ConstantStringType('Off'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Error'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationLogLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('SystemLogLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                            new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('FATAL'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                            new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResolvedImageUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceKMSKeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedConcurrentExecutions'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getFunctionCodeSigningConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CodeSigningConfigArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getFunctionConcurrency(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReservedConcurrentExecutions'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getFunctionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FunctionName'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                new \PHPStan\Type\Constant\ConstantStringType('Role'),
                new \PHPStan\Type\Constant\ConstantStringType('Handler'),
                new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                new \PHPStan\Type\Constant\ConstantStringType('MemorySize'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                new \PHPStan\Type\Constant\ConstantStringType('CodeSha256'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('DeadLetterConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TracingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('MasterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('Layers'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                new \PHPStan\Type\Constant\ConstantStringType('StateReasonCode'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatusReasonCode'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                new \PHPStan\Type\Constant\ConstantStringType('ImageConfigResponse'),
                new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Architectures'),
                new \PHPStan\Type\Constant\ConstantStringType('EphemeralStorage'),
                new \PHPStan\Type\Constant\ConstantStringType('SnapStart'),
                new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('LoggingConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs6.10'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs8.10'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs10.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs12.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs14.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs16.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('java8'),
                    new \PHPStan\Type\Constant\ConstantStringType('java8.al2'),
                    new \PHPStan\Type\Constant\ConstantStringType('java11'),
                    new \PHPStan\Type\Constant\ConstantStringType('python2.7'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.6'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.7'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.8'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.9'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore1.0'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.0'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.1'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore3.1'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnet6'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnet8'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3-edge'),
                    new \PHPStan\Type\Constant\ConstantStringType('go1.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby2.5'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby2.7'),
                    new \PHPStan\Type\Constant\ConstantStringType('provided'),
                    new \PHPStan\Type\Constant\ConstantStringType('provided.al2'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs18.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.10'),
                    new \PHPStan\Type\Constant\ConstantStringType('java17'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby3.2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby3.3'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.11'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs20.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('provided.al2023'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.12'),
                    new \PHPStan\Type\Constant\ConstantStringType('java21'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.13'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs22.x'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6AllowedForDualStack'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Variables'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('PassThrough'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Idle'),
                    new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Restoring'),
                    new \PHPStan\Type\Constant\ConstantStringType('EniLimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('InsufficientRolePermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetOutOfIPAddresses'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSubnet'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSecurityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageDeleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidImage'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidStateKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSIOError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountConnectivityError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidRuntime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidZipFileException'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EniLimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('InsufficientRolePermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetOutOfIPAddresses'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSubnet'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSecurityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageDeleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidImage'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidStateKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSIOError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountConnectivityError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidRuntime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidZipFileException'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalMountPath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Zip'),
                    new \PHPStan\Type\Constant\ConstantStringType('Image'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ImageConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EntryPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Command'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('arm64'),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplyOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptimizationStatus'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PublishedVersions'),
                        new \PHPStan\Type\Constant\ConstantStringType('None'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('On'),
                        new \PHPStan\Type\Constant\ConstantStringType('Off'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationLogLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('SystemLogLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('FATAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getFunctionEventInvokeConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumRetryAttempts'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumEventAgeInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationConfig'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OnSuccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnFailure'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getFunctionRecursionConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecursiveLoop'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Allow'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terminate'),
                ]),
            ]),
        ]);
    }
    private function getFunctionUrlConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FunctionUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthType'),
                new \PHPStan\Type\Constant\ConstantStringType('Cors'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('InvokeMode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllowCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowMethods'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowOrigins'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExposeHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAge'),
                ], [
                    new \PHPStan\Type\BooleanType(),
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
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BUFFERED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESPONSE_STREAM'),
                ]),
            ]),
        ]);
    }
    private function getLayerVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Content'),
                new \PHPStan\Type\Constant\ConstantStringType('LayerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LayerVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                new \PHPStan\Type\Constant\ConstantStringType('CompatibleRuntimes'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('CompatibleArchitectures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs6.10'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs8.10'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs10.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs12.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs14.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs16.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('java8'),
                        new \PHPStan\Type\Constant\ConstantStringType('java8.al2'),
                        new \PHPStan\Type\Constant\ConstantStringType('java11'),
                        new \PHPStan\Type\Constant\ConstantStringType('python2.7'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.6'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.7'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.8'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.9'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnetcore1.0'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.0'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.1'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnetcore3.1'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnet6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnet8'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3-edge'),
                        new \PHPStan\Type\Constant\ConstantStringType('go1.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby2.5'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby2.7'),
                        new \PHPStan\Type\Constant\ConstantStringType('provided'),
                        new \PHPStan\Type\Constant\ConstantStringType('provided.al2'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs18.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.10'),
                        new \PHPStan\Type\Constant\ConstantStringType('java17'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby3.2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby3.3'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.11'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs20.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('provided.al2023'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.12'),
                        new \PHPStan\Type\Constant\ConstantStringType('java21'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.13'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs22.x'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('arm64'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getLayerVersionByArn(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Content'),
                new \PHPStan\Type\Constant\ConstantStringType('LayerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LayerVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                new \PHPStan\Type\Constant\ConstantStringType('CompatibleRuntimes'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('CompatibleArchitectures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs6.10'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs8.10'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs10.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs12.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs14.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs16.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('java8'),
                        new \PHPStan\Type\Constant\ConstantStringType('java8.al2'),
                        new \PHPStan\Type\Constant\ConstantStringType('java11'),
                        new \PHPStan\Type\Constant\ConstantStringType('python2.7'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.6'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.7'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.8'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.9'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnetcore1.0'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.0'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.1'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnetcore3.1'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnet6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnet8'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3-edge'),
                        new \PHPStan\Type\Constant\ConstantStringType('go1.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby2.5'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby2.7'),
                        new \PHPStan\Type\Constant\ConstantStringType('provided'),
                        new \PHPStan\Type\Constant\ConstantStringType('provided.al2'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs18.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.10'),
                        new \PHPStan\Type\Constant\ConstantStringType('java17'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby3.2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby3.3'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.11'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs20.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('provided.al2023'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.12'),
                        new \PHPStan\Type\Constant\ConstantStringType('java21'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.13'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs22.x'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('arm64'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getLayerVersionPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getProvisionedConcurrencyConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RequestedProvisionedConcurrentExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('AvailableProvisionedConcurrentExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('AllocatedProvisionedConcurrentExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRuntimeManagementConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdateRuntimeOn'),
                new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Auto'),
                    new \PHPStan\Type\Constant\ConstantStringType('Manual'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionUpdate'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function invoke(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                new \PHPStan\Type\Constant\ConstantStringType('LogResult'),
                new \PHPStan\Type\Constant\ConstantStringType('Payload'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutedVersion'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function invokeAsync(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function invokeWithResponseStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutedVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('EventStream'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseStreamContentType'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PayloadChunk'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvokeComplete'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Payload'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogResult'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAliases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AliasArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoutingConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdditionalVersionWeights'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\FloatType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listCodeSigningConfigs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('CodeSigningConfigs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CodeSigningConfigId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeSigningConfigArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedPublishers'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeSigningPolicies'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArns'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UntrustedArtifactOnDeployment'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Warn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enforce'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listEventSourceMappings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('EventSourceMappings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UUID'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartingPosition'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartingPositionTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('BatchSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumBatchingWindowInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParallelizationFactor'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventSourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('FilterCriteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastProcessingResult'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateTransitionReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('Topics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Queues'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceAccessConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('SelfManagedEventSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumRecordAgeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('BisectBatchOnFunctionError'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumRetryAttempts'),
                        new \PHPStan\Type\Constant\ConstantStringType('TumblingWindowInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionResponseTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonManagedKafkaEventSourceConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('SelfManagedKafkaEventSourceConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScalingConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentDBEventSourceConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('FilterCriteriaError'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventSourceMappingArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricsConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisionedPollerConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TRIM_HORIZON'),
                            new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('AT_TIMESTAMP'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Filters'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Pattern'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OnSuccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnFailure'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('URI'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BASIC_AUTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_SUBNET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_SECURITY_GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SASL_SCRAM_512_AUTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SASL_SCRAM_256_AUTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VIRTUAL_HOST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLIENT_CERTIFICATE_TLS_AUTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SERVER_ROOT_CA_CERTIFICATE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\Constant\ConstantStringType('KAFKA_BOOTSTRAP_SERVERS'), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ]))),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReportBatchItemFailures'),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConsumerGroupId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConsumerGroupId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaximumConcurrency'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('CollectionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('FullDocument'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UpdateLookup'),
                                new \PHPStan\Type\Constant\ConstantStringType('Default'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EventCount'),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumPollers'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaximumPollers'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listFunctionEventInvokeConfigs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FunctionEventInvokeConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumRetryAttempts'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumEventAgeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationConfig'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OnSuccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnFailure'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFunctionUrlConfigs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FunctionUrlConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cors'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthType'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvokeMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AllowCredentials'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllowHeaders'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllowMethods'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllowOrigins'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExposeHeaders'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxAge'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
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
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BUFFERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESPONSE_STREAM'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFunctions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Functions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('Handler'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('MemorySize'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeSha256'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeadLetterConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TracingConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('MasterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Layers'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReasonCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatusReasonCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('FileSystemConfigs'),
                        new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageConfigResponse'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Architectures'),
                        new \PHPStan\Type\Constant\ConstantStringType('EphemeralStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapStart'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs6.10'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs8.10'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs10.x'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs12.x'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs14.x'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs16.x'),
                            new \PHPStan\Type\Constant\ConstantStringType('java8'),
                            new \PHPStan\Type\Constant\ConstantStringType('java8.al2'),
                            new \PHPStan\Type\Constant\ConstantStringType('java11'),
                            new \PHPStan\Type\Constant\ConstantStringType('python2.7'),
                            new \PHPStan\Type\Constant\ConstantStringType('python3.6'),
                            new \PHPStan\Type\Constant\ConstantStringType('python3.7'),
                            new \PHPStan\Type\Constant\ConstantStringType('python3.8'),
                            new \PHPStan\Type\Constant\ConstantStringType('python3.9'),
                            new \PHPStan\Type\Constant\ConstantStringType('dotnetcore1.0'),
                            new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.0'),
                            new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.1'),
                            new \PHPStan\Type\Constant\ConstantStringType('dotnetcore3.1'),
                            new \PHPStan\Type\Constant\ConstantStringType('dotnet6'),
                            new \PHPStan\Type\Constant\ConstantStringType('dotnet8'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3-edge'),
                            new \PHPStan\Type\Constant\ConstantStringType('go1.x'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruby2.5'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruby2.7'),
                            new \PHPStan\Type\Constant\ConstantStringType('provided'),
                            new \PHPStan\Type\Constant\ConstantStringType('provided.al2'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs18.x'),
                            new \PHPStan\Type\Constant\ConstantStringType('python3.10'),
                            new \PHPStan\Type\Constant\ConstantStringType('java17'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruby3.2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruby3.3'),
                            new \PHPStan\Type\Constant\ConstantStringType('python3.11'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs20.x'),
                            new \PHPStan\Type\Constant\ConstantStringType('provided.al2023'),
                            new \PHPStan\Type\Constant\ConstantStringType('python3.12'),
                            new \PHPStan\Type\Constant\ConstantStringType('java21'),
                            new \PHPStan\Type\Constant\ConstantStringType('python3.13'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs22.x'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ipv6AllowedForDualStack'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Variables'),
                            new \PHPStan\Type\Constant\ConstantStringType('Error'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                                new \PHPStan\Type\Constant\ConstantStringType('PassThrough'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Idle'),
                            new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                            new \PHPStan\Type\Constant\ConstantStringType('Restoring'),
                            new \PHPStan\Type\Constant\ConstantStringType('EniLimitExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientRolePermissions'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetOutOfIPAddresses'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidSubnet'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidSecurityGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageDeleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageAccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidImage'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSKeyAccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSKeyNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidStateKMSKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('DisabledKMSKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('EFSIOError'),
                            new \PHPStan\Type\Constant\ConstantStringType('EFSMountConnectivityError'),
                            new \PHPStan\Type\Constant\ConstantStringType('EFSMountFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('EFSMountTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidRuntime'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidZipFileException'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EniLimitExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientRolePermissions'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetOutOfIPAddresses'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidSubnet'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidSecurityGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageDeleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageAccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidImage'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSKeyAccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSKeyNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidStateKMSKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('DisabledKMSKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('EFSIOError'),
                            new \PHPStan\Type\Constant\ConstantStringType('EFSMountConnectivityError'),
                            new \PHPStan\Type\Constant\ConstantStringType('EFSMountFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('EFSMountTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidRuntime'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidZipFileException'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocalMountPath'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Zip'),
                            new \PHPStan\Type\Constant\ConstantStringType('Image'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ImageConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('Error'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EntryPoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('Command'),
                                new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('x86_64'),
                                new \PHPStan\Type\Constant\ConstantStringType('arm64'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Size'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyOn'),
                            new \PHPStan\Type\Constant\ConstantStringType('OptimizationStatus'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PublishedVersions'),
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('On'),
                                new \PHPStan\Type\Constant\ConstantStringType('Off'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Error'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplicationLogLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemLogLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('FATAL'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listFunctionsByCodeSigningConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArns'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listLayerVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('LayerVersions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LayerVersionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompatibleRuntimes'),
                        new \PHPStan\Type\Constant\ConstantStringType('LicenseInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompatibleArchitectures'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('nodejs'),
                                new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3'),
                                new \PHPStan\Type\Constant\ConstantStringType('nodejs6.10'),
                                new \PHPStan\Type\Constant\ConstantStringType('nodejs8.10'),
                                new \PHPStan\Type\Constant\ConstantStringType('nodejs10.x'),
                                new \PHPStan\Type\Constant\ConstantStringType('nodejs12.x'),
                                new \PHPStan\Type\Constant\ConstantStringType('nodejs14.x'),
                                new \PHPStan\Type\Constant\ConstantStringType('nodejs16.x'),
                                new \PHPStan\Type\Constant\ConstantStringType('java8'),
                                new \PHPStan\Type\Constant\ConstantStringType('java8.al2'),
                                new \PHPStan\Type\Constant\ConstantStringType('java11'),
                                new \PHPStan\Type\Constant\ConstantStringType('python2.7'),
                                new \PHPStan\Type\Constant\ConstantStringType('python3.6'),
                                new \PHPStan\Type\Constant\ConstantStringType('python3.7'),
                                new \PHPStan\Type\Constant\ConstantStringType('python3.8'),
                                new \PHPStan\Type\Constant\ConstantStringType('python3.9'),
                                new \PHPStan\Type\Constant\ConstantStringType('dotnetcore1.0'),
                                new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.0'),
                                new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.1'),
                                new \PHPStan\Type\Constant\ConstantStringType('dotnetcore3.1'),
                                new \PHPStan\Type\Constant\ConstantStringType('dotnet6'),
                                new \PHPStan\Type\Constant\ConstantStringType('dotnet8'),
                                new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3-edge'),
                                new \PHPStan\Type\Constant\ConstantStringType('go1.x'),
                                new \PHPStan\Type\Constant\ConstantStringType('ruby2.5'),
                                new \PHPStan\Type\Constant\ConstantStringType('ruby2.7'),
                                new \PHPStan\Type\Constant\ConstantStringType('provided'),
                                new \PHPStan\Type\Constant\ConstantStringType('provided.al2'),
                                new \PHPStan\Type\Constant\ConstantStringType('nodejs18.x'),
                                new \PHPStan\Type\Constant\ConstantStringType('python3.10'),
                                new \PHPStan\Type\Constant\ConstantStringType('java17'),
                                new \PHPStan\Type\Constant\ConstantStringType('ruby3.2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ruby3.3'),
                                new \PHPStan\Type\Constant\ConstantStringType('python3.11'),
                                new \PHPStan\Type\Constant\ConstantStringType('nodejs20.x'),
                                new \PHPStan\Type\Constant\ConstantStringType('provided.al2023'),
                                new \PHPStan\Type\Constant\ConstantStringType('python3.12'),
                                new \PHPStan\Type\Constant\ConstantStringType('java21'),
                                new \PHPStan\Type\Constant\ConstantStringType('python3.13'),
                                new \PHPStan\Type\Constant\ConstantStringType('nodejs22.x'),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('x86_64'),
                                new \PHPStan\Type\Constant\ConstantStringType('arm64'),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listLayers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Layers'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LayerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LayerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('LatestMatchingVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LayerVersionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('CompatibleRuntimes'),
                            new \PHPStan\Type\Constant\ConstantStringType('LicenseInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('CompatibleArchitectures'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('nodejs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nodejs6.10'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nodejs8.10'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nodejs10.x'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nodejs12.x'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nodejs14.x'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nodejs16.x'),
                                    new \PHPStan\Type\Constant\ConstantStringType('java8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('java8.al2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('java11'),
                                    new \PHPStan\Type\Constant\ConstantStringType('python2.7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('python3.6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('python3.7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('python3.8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('python3.9'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore1.0'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.0'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore3.1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dotnet6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dotnet8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3-edge'),
                                    new \PHPStan\Type\Constant\ConstantStringType('go1.x'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ruby2.5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ruby2.7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('provided'),
                                    new \PHPStan\Type\Constant\ConstantStringType('provided.al2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nodejs18.x'),
                                    new \PHPStan\Type\Constant\ConstantStringType('python3.10'),
                                    new \PHPStan\Type\Constant\ConstantStringType('java17'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ruby3.2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ruby3.3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('python3.11'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nodejs20.x'),
                                    new \PHPStan\Type\Constant\ConstantStringType('provided.al2023'),
                                    new \PHPStan\Type\Constant\ConstantStringType('python3.12'),
                                    new \PHPStan\Type\Constant\ConstantStringType('java21'),
                                    new \PHPStan\Type\Constant\ConstantStringType('python3.13'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nodejs22.x'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('x86_64'),
                                    new \PHPStan\Type\Constant\ConstantStringType('arm64'),
                                ]),
                            ])),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listProvisionedConcurrencyConfigs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedConcurrencyConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestedProvisionedConcurrentExecutions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailableProvisionedConcurrentExecutions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedProvisionedConcurrentExecutions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listVersionsByFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Versions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('Handler'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('MemorySize'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeSha256'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeadLetterConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TracingConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('MasterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Layers'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReasonCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatusReasonCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('FileSystemConfigs'),
                        new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageConfigResponse'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Architectures'),
                        new \PHPStan\Type\Constant\ConstantStringType('EphemeralStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapStart'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs6.10'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs8.10'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs10.x'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs12.x'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs14.x'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs16.x'),
                            new \PHPStan\Type\Constant\ConstantStringType('java8'),
                            new \PHPStan\Type\Constant\ConstantStringType('java8.al2'),
                            new \PHPStan\Type\Constant\ConstantStringType('java11'),
                            new \PHPStan\Type\Constant\ConstantStringType('python2.7'),
                            new \PHPStan\Type\Constant\ConstantStringType('python3.6'),
                            new \PHPStan\Type\Constant\ConstantStringType('python3.7'),
                            new \PHPStan\Type\Constant\ConstantStringType('python3.8'),
                            new \PHPStan\Type\Constant\ConstantStringType('python3.9'),
                            new \PHPStan\Type\Constant\ConstantStringType('dotnetcore1.0'),
                            new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.0'),
                            new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.1'),
                            new \PHPStan\Type\Constant\ConstantStringType('dotnetcore3.1'),
                            new \PHPStan\Type\Constant\ConstantStringType('dotnet6'),
                            new \PHPStan\Type\Constant\ConstantStringType('dotnet8'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3-edge'),
                            new \PHPStan\Type\Constant\ConstantStringType('go1.x'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruby2.5'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruby2.7'),
                            new \PHPStan\Type\Constant\ConstantStringType('provided'),
                            new \PHPStan\Type\Constant\ConstantStringType('provided.al2'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs18.x'),
                            new \PHPStan\Type\Constant\ConstantStringType('python3.10'),
                            new \PHPStan\Type\Constant\ConstantStringType('java17'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruby3.2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruby3.3'),
                            new \PHPStan\Type\Constant\ConstantStringType('python3.11'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs20.x'),
                            new \PHPStan\Type\Constant\ConstantStringType('provided.al2023'),
                            new \PHPStan\Type\Constant\ConstantStringType('python3.12'),
                            new \PHPStan\Type\Constant\ConstantStringType('java21'),
                            new \PHPStan\Type\Constant\ConstantStringType('python3.13'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs22.x'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ipv6AllowedForDualStack'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Variables'),
                            new \PHPStan\Type\Constant\ConstantStringType('Error'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                                new \PHPStan\Type\Constant\ConstantStringType('PassThrough'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Idle'),
                            new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                            new \PHPStan\Type\Constant\ConstantStringType('Restoring'),
                            new \PHPStan\Type\Constant\ConstantStringType('EniLimitExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientRolePermissions'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetOutOfIPAddresses'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidSubnet'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidSecurityGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageDeleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageAccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidImage'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSKeyAccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSKeyNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidStateKMSKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('DisabledKMSKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('EFSIOError'),
                            new \PHPStan\Type\Constant\ConstantStringType('EFSMountConnectivityError'),
                            new \PHPStan\Type\Constant\ConstantStringType('EFSMountFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('EFSMountTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidRuntime'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidZipFileException'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EniLimitExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientRolePermissions'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetOutOfIPAddresses'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidSubnet'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidSecurityGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageDeleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageAccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidImage'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSKeyAccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSKeyNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidStateKMSKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('DisabledKMSKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('EFSIOError'),
                            new \PHPStan\Type\Constant\ConstantStringType('EFSMountConnectivityError'),
                            new \PHPStan\Type\Constant\ConstantStringType('EFSMountFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('EFSMountTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidRuntime'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidZipFileException'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocalMountPath'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Zip'),
                            new \PHPStan\Type\Constant\ConstantStringType('Image'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ImageConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('Error'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EntryPoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('Command'),
                                new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('x86_64'),
                                new \PHPStan\Type\Constant\ConstantStringType('arm64'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Size'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyOn'),
                            new \PHPStan\Type\Constant\ConstantStringType('OptimizationStatus'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PublishedVersions'),
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('On'),
                                new \PHPStan\Type\Constant\ConstantStringType('Off'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Error'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplicationLogLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemLogLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('FATAL'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function publishLayerVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Content'),
                new \PHPStan\Type\Constant\ConstantStringType('LayerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LayerVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                new \PHPStan\Type\Constant\ConstantStringType('CompatibleRuntimes'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('CompatibleArchitectures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSha256'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs6.10'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs8.10'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs10.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs12.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs14.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs16.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('java8'),
                        new \PHPStan\Type\Constant\ConstantStringType('java8.al2'),
                        new \PHPStan\Type\Constant\ConstantStringType('java11'),
                        new \PHPStan\Type\Constant\ConstantStringType('python2.7'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.6'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.7'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.8'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.9'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnetcore1.0'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.0'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.1'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnetcore3.1'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnet6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dotnet8'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3-edge'),
                        new \PHPStan\Type\Constant\ConstantStringType('go1.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby2.5'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby2.7'),
                        new \PHPStan\Type\Constant\ConstantStringType('provided'),
                        new \PHPStan\Type\Constant\ConstantStringType('provided.al2'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs18.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.10'),
                        new \PHPStan\Type\Constant\ConstantStringType('java17'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby3.2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby3.3'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.11'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs20.x'),
                        new \PHPStan\Type\Constant\ConstantStringType('provided.al2023'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.12'),
                        new \PHPStan\Type\Constant\ConstantStringType('java21'),
                        new \PHPStan\Type\Constant\ConstantStringType('python3.13'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodejs22.x'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('arm64'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function publishVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FunctionName'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                new \PHPStan\Type\Constant\ConstantStringType('Role'),
                new \PHPStan\Type\Constant\ConstantStringType('Handler'),
                new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                new \PHPStan\Type\Constant\ConstantStringType('MemorySize'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                new \PHPStan\Type\Constant\ConstantStringType('CodeSha256'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('DeadLetterConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TracingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('MasterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('Layers'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                new \PHPStan\Type\Constant\ConstantStringType('StateReasonCode'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatusReasonCode'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                new \PHPStan\Type\Constant\ConstantStringType('ImageConfigResponse'),
                new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Architectures'),
                new \PHPStan\Type\Constant\ConstantStringType('EphemeralStorage'),
                new \PHPStan\Type\Constant\ConstantStringType('SnapStart'),
                new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('LoggingConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs6.10'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs8.10'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs10.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs12.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs14.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs16.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('java8'),
                    new \PHPStan\Type\Constant\ConstantStringType('java8.al2'),
                    new \PHPStan\Type\Constant\ConstantStringType('java11'),
                    new \PHPStan\Type\Constant\ConstantStringType('python2.7'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.6'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.7'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.8'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.9'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore1.0'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.0'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.1'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore3.1'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnet6'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnet8'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3-edge'),
                    new \PHPStan\Type\Constant\ConstantStringType('go1.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby2.5'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby2.7'),
                    new \PHPStan\Type\Constant\ConstantStringType('provided'),
                    new \PHPStan\Type\Constant\ConstantStringType('provided.al2'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs18.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.10'),
                    new \PHPStan\Type\Constant\ConstantStringType('java17'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby3.2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby3.3'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.11'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs20.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('provided.al2023'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.12'),
                    new \PHPStan\Type\Constant\ConstantStringType('java21'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.13'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs22.x'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6AllowedForDualStack'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Variables'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('PassThrough'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Idle'),
                    new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Restoring'),
                    new \PHPStan\Type\Constant\ConstantStringType('EniLimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('InsufficientRolePermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetOutOfIPAddresses'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSubnet'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSecurityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageDeleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidImage'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidStateKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSIOError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountConnectivityError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidRuntime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidZipFileException'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EniLimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('InsufficientRolePermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetOutOfIPAddresses'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSubnet'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSecurityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageDeleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidImage'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidStateKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSIOError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountConnectivityError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidRuntime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidZipFileException'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalMountPath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Zip'),
                    new \PHPStan\Type\Constant\ConstantStringType('Image'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ImageConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EntryPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Command'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('arm64'),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplyOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptimizationStatus'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PublishedVersions'),
                        new \PHPStan\Type\Constant\ConstantStringType('None'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('On'),
                        new \PHPStan\Type\Constant\ConstantStringType('Off'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationLogLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('SystemLogLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('FATAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putFunctionCodeSigningConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CodeSigningConfigArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putFunctionConcurrency(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReservedConcurrentExecutions'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function putFunctionEventInvokeConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumRetryAttempts'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumEventAgeInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationConfig'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OnSuccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnFailure'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putFunctionRecursionConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecursiveLoop'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Allow'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terminate'),
                ]),
            ]),
        ]);
    }
    private function putProvisionedConcurrencyConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RequestedProvisionedConcurrentExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('AvailableProvisionedConcurrentExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('AllocatedProvisionedConcurrentExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putRuntimeManagementConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdateRuntimeOn'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionArn'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Auto'),
                    new \PHPStan\Type\Constant\ConstantStringType('Manual'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionUpdate'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeLayerVersionPermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function removePermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AliasArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('RoutingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalVersionWeights'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\FloatType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateCodeSigningConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CodeSigningConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSigningConfigId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSigningConfigArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedPublishers'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeSigningPolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArns'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UntrustedArtifactOnDeployment'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Warn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Enforce'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateEventSourceMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UUID'),
                new \PHPStan\Type\Constant\ConstantStringType('StartingPosition'),
                new \PHPStan\Type\Constant\ConstantStringType('StartingPositionTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('BatchSize'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumBatchingWindowInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('ParallelizationFactor'),
                new \PHPStan\Type\Constant\ConstantStringType('EventSourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FilterCriteria'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                new \PHPStan\Type\Constant\ConstantStringType('LastProcessingResult'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('StateTransitionReason'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Topics'),
                new \PHPStan\Type\Constant\ConstantStringType('Queues'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceAccessConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('SelfManagedEventSource'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumRecordAgeInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('BisectBatchOnFunctionError'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumRetryAttempts'),
                new \PHPStan\Type\Constant\ConstantStringType('TumblingWindowInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionResponseTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('AmazonManagedKafkaEventSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('SelfManagedKafkaEventSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ScalingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentDBEventSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FilterCriteriaError'),
                new \PHPStan\Type\Constant\ConstantStringType('EventSourceMappingArn'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricsConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedPollerConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRIM_HORIZON'),
                    new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                    new \PHPStan\Type\Constant\ConstantStringType('AT_TIMESTAMP'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Filters'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pattern'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OnSuccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnFailure'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('URI'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BASIC_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_SUBNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_SECURITY_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('SASL_SCRAM_512_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('SASL_SCRAM_256_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIRTUAL_HOST'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLIENT_CERTIFICATE_TLS_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVER_ROOT_CA_CERTIFICATE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\Constant\ConstantStringType('KAFKA_BOOTSTRAP_SERVERS'), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ]))),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReportBatchItemFailures'),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerGroupId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerGroupId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MaximumConcurrency'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CollectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FullDocument'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateLookup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Default'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EventCount'),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MinimumPollers'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaximumPollers'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function updateFunctionCode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FunctionName'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                new \PHPStan\Type\Constant\ConstantStringType('Role'),
                new \PHPStan\Type\Constant\ConstantStringType('Handler'),
                new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                new \PHPStan\Type\Constant\ConstantStringType('MemorySize'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                new \PHPStan\Type\Constant\ConstantStringType('CodeSha256'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('DeadLetterConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TracingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('MasterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('Layers'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                new \PHPStan\Type\Constant\ConstantStringType('StateReasonCode'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatusReasonCode'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                new \PHPStan\Type\Constant\ConstantStringType('ImageConfigResponse'),
                new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Architectures'),
                new \PHPStan\Type\Constant\ConstantStringType('EphemeralStorage'),
                new \PHPStan\Type\Constant\ConstantStringType('SnapStart'),
                new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('LoggingConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs6.10'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs8.10'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs10.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs12.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs14.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs16.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('java8'),
                    new \PHPStan\Type\Constant\ConstantStringType('java8.al2'),
                    new \PHPStan\Type\Constant\ConstantStringType('java11'),
                    new \PHPStan\Type\Constant\ConstantStringType('python2.7'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.6'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.7'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.8'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.9'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore1.0'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.0'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.1'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore3.1'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnet6'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnet8'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3-edge'),
                    new \PHPStan\Type\Constant\ConstantStringType('go1.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby2.5'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby2.7'),
                    new \PHPStan\Type\Constant\ConstantStringType('provided'),
                    new \PHPStan\Type\Constant\ConstantStringType('provided.al2'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs18.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.10'),
                    new \PHPStan\Type\Constant\ConstantStringType('java17'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby3.2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby3.3'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.11'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs20.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('provided.al2023'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.12'),
                    new \PHPStan\Type\Constant\ConstantStringType('java21'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.13'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs22.x'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6AllowedForDualStack'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Variables'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('PassThrough'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Idle'),
                    new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Restoring'),
                    new \PHPStan\Type\Constant\ConstantStringType('EniLimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('InsufficientRolePermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetOutOfIPAddresses'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSubnet'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSecurityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageDeleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidImage'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidStateKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSIOError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountConnectivityError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidRuntime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidZipFileException'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EniLimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('InsufficientRolePermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetOutOfIPAddresses'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSubnet'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSecurityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageDeleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidImage'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidStateKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSIOError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountConnectivityError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidRuntime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidZipFileException'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalMountPath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Zip'),
                    new \PHPStan\Type\Constant\ConstantStringType('Image'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ImageConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EntryPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Command'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('arm64'),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplyOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptimizationStatus'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PublishedVersions'),
                        new \PHPStan\Type\Constant\ConstantStringType('None'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('On'),
                        new \PHPStan\Type\Constant\ConstantStringType('Off'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationLogLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('SystemLogLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('FATAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateFunctionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FunctionName'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                new \PHPStan\Type\Constant\ConstantStringType('Role'),
                new \PHPStan\Type\Constant\ConstantStringType('Handler'),
                new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                new \PHPStan\Type\Constant\ConstantStringType('MemorySize'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                new \PHPStan\Type\Constant\ConstantStringType('CodeSha256'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('DeadLetterConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TracingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('MasterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('Layers'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                new \PHPStan\Type\Constant\ConstantStringType('StateReasonCode'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateStatusReasonCode'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                new \PHPStan\Type\Constant\ConstantStringType('ImageConfigResponse'),
                new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Architectures'),
                new \PHPStan\Type\Constant\ConstantStringType('EphemeralStorage'),
                new \PHPStan\Type\Constant\ConstantStringType('SnapStart'),
                new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('LoggingConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs6.10'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs8.10'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs10.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs12.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs14.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs16.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('java8'),
                    new \PHPStan\Type\Constant\ConstantStringType('java8.al2'),
                    new \PHPStan\Type\Constant\ConstantStringType('java11'),
                    new \PHPStan\Type\Constant\ConstantStringType('python2.7'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.6'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.7'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.8'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.9'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore1.0'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.0'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore2.1'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnetcore3.1'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnet6'),
                    new \PHPStan\Type\Constant\ConstantStringType('dotnet8'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs4.3-edge'),
                    new \PHPStan\Type\Constant\ConstantStringType('go1.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby2.5'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby2.7'),
                    new \PHPStan\Type\Constant\ConstantStringType('provided'),
                    new \PHPStan\Type\Constant\ConstantStringType('provided.al2'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs18.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.10'),
                    new \PHPStan\Type\Constant\ConstantStringType('java17'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby3.2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby3.3'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.11'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs20.x'),
                    new \PHPStan\Type\Constant\ConstantStringType('provided.al2023'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.12'),
                    new \PHPStan\Type\Constant\ConstantStringType('java21'),
                    new \PHPStan\Type\Constant\ConstantStringType('python3.13'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodejs22.x'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6AllowedForDualStack'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Variables'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('PassThrough'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningProfileVersionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningJobArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Idle'),
                    new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Restoring'),
                    new \PHPStan\Type\Constant\ConstantStringType('EniLimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('InsufficientRolePermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetOutOfIPAddresses'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSubnet'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSecurityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageDeleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidImage'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidStateKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSIOError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountConnectivityError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidRuntime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidZipFileException'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EniLimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('InsufficientRolePermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetOutOfIPAddresses'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSubnet'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSecurityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageDeleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidImage'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyAccessDenied'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidStateKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledKMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSIOError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountConnectivityError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFSMountTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidRuntime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidZipFileException'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionError'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalMountPath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Zip'),
                    new \PHPStan\Type\Constant\ConstantStringType('Image'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ImageConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EntryPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Command'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('arm64'),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplyOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptimizationStatus'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PublishedVersions'),
                        new \PHPStan\Type\Constant\ConstantStringType('None'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('On'),
                        new \PHPStan\Type\Constant\ConstantStringType('Off'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationLogLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('SystemLogLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('FATAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateFunctionEventInvokeConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumRetryAttempts'),
                new \PHPStan\Type\Constant\ConstantStringType('MaximumEventAgeInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationConfig'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OnSuccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnFailure'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateFunctionUrlConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FunctionUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthType'),
                new \PHPStan\Type\Constant\ConstantStringType('Cors'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('InvokeMode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllowCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowMethods'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowOrigins'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExposeHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAge'),
                ], [
                    new \PHPStan\Type\BooleanType(),
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
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BUFFERED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESPONSE_STREAM'),
                ]),
            ]),
        ]);
    }
}